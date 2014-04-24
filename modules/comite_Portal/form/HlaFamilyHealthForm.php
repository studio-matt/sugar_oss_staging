<?php
include_once(dirname(__FILE__).'/HlaForm.php');

class HlaFamilyHealthForm extends HlaForm {
  public function __construct($user) {
    parent::__construct($user);

    # Populate: comite_FamilyHealthHistory - one2one, not present until we create it here
    $this->contact->get_linked_beans('comite_familyhealthhistory_contacts', 'comite_FamilyHealthHistory');
    if (count($this->contact->comite_familyhealthhistory_contacts->beans)) {
      $this->family_health = $this->contact->comite_familyhealthhistory_contacts->beans[reset(array_keys($this->contact->comite_familyhealthhistory_contacts->beans))];
    } else {
      $this->family_health = new comite_FamilyHealthHistory();
      $this->family_health->name = $this->contact->name . "'s Family Health History";
      $this->family_health->save();
    }

    # Populate: comite_Relative
    $this->relatives = array();
    if ($this->family_health instanceof SugarBean) {
      // many2many
      $this->family_health->get_linked_beans('comite_relative_comite_familyhealthhistory', 'comite_Relative');
      $i = 0;
      foreach($this->family_health->comite_relative_comite_familyhealthhistory->beans as $relative) {
        $relative->get_linked_beans('comite_relative_comite_conditioninstance', 'comite_conditionInstance');
        $relative->_many_key = 'relatives__'.$i;
        if(!empty($relative->date_born)) {
            $date = new DateTime($relative->date_born);
            $relative->date_born = $date->diff(new DateTime('now'))->y;
        }
        $this->relatives[] = $relative;
        $i++;
      }
    }

    # Populate: comite_CondiationInstance - many2many
    $this->conditioninstances = array();
    if ($this->family_health instanceof SugarBean) {
      $this->family_health->get_linked_beans('comite_conditioninstance_comite_familyhealthhistory', 'comite_ConditionInstance');
      foreach($this->family_health->comite_conditioninstance_comite_familyhealthhistory->beans as $conditioninstance) {
        // load the relative of the condition
        $conditioninstance->get_linked_beans('comite_conditioninstance_comite_relative', 'comite_Relative');
        // pre-assign our 'hidden' key
        if ($conditioninstance->comite_conditioninstance_comite_relative->beans) {
          $relative = $conditioninstance->comite_conditioninstance_comite_relative->beans[reset(array_keys($conditioninstance->comite_conditioninstance_comite_relative->beans))];
          foreach($this->relatives as $key => $_relative) {
            if ($_relative->id == $relative->id) {
              $conditioninstance->_relative = $_relative;
            }
          }
        }
        $this->conditioninstances[] = $conditioninstance;
      }
    }
  }

  public function process() {
    if ($this->has('user__record') && $this->get('user__record') == $this->user->id) {
      // @TODO validation & errors, perhaps push the code to save to a stack and run them at the end?

      if ($this->family_health instanceof stdClass) {
        $this->family_health = new comite_FamilyHealthHistory();
        $this->family_health->id = create_guid();
        $this->family_health->new_with_id = true;
        $this->family_health->get_linked_beans('comite_conditioninstance_comite_familyhealthhistory', 'comite_ConditionInstance');
      }

      // Change the current age to a date
      foreach($_REQUEST['relatives'] as $i => $relative) {
          if(!empty($relative['date_born'])) {
              $date = new DateTime();
              if (!preg_match('#^(\d{4})-\d{2}-\d{2}$#', $relative['date_born'], $matches)) {
                if (!preg_match('#^\d+$#', $relative['date_born'])) {
                  $_REQUEST['relatives'][$i]['date_born'] = '';
                } else {
                  $date->sub(new DateInterval('P'.$relative['date_born'].'Y'));
                  $_REQUEST['relatives'][$i]['date_born'] = $date->format('Y-m-d');
                }
              }
          }
      }

      $this->bindOneToMany('relatives', 'relatives', 'comite_Relative', array(
        'name' =>  array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your relative\'s name.'
            ),
          ),
        ),
        'relation' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must choose your relation to this relative.'
            ),
          ),
        ),
        'is_deceased' => array(),
        'date_deceased' => array(),
        'date_born' => array(),
        'deceased_explanation' => array(),
      ));

      $this->bindOneToMany('conditioninstances', 'conditioninstances', 'comite_ConditionInstance', array(
        'name' => array(),
        'relative' => array(
          'name' => '_relative',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must choose a relative.'
            ),
          ),
        ),
        'note_patient' => array()
      ));
      // connect the condition instances to the relative instances
      foreach($this->get('conditioninstances') as $hc_key => $_conditioninstance) {
        if (strlen($_conditioninstance['relative'])) {
          foreach($this->conditioninstances as $conditioninstance) {
            if ($conditioninstance->_many_key == $hc_key) {
              $r_key = str_replace('relatives__', '', $_conditioninstance['relative']);
              foreach($this->relatives as $relative) {
                if ($relative->_many_key == $r_key) {
                  $conditioninstance->_relative = $relative;
                  break 2;
                }
              }
            }
          }
        }
      }

      // actually save
      if (ComiteForm::SAVE_FORM_EVEN_ON_ERROR || !$this->errors) {
        $this->family_health->save();

        foreach($this->relatives as $relative) {
          $relative->save();
          $this->family_health->comite_relative_comite_familyhealthhistory->add($relative);
        }

        foreach($this->conditioninstances as $conditioninstance) {
          $conditioninstance->save();
          $this->family_health->comite_conditioninstance_comite_familyhealthhistory->add($conditioninstance);

          // hasOne, change related, remove existing if needed
          $conditioninstance->get_linked_beans('comite_conditioninstance_comite_relative', 'comite_Relative');
          foreach($conditioninstance->comite_conditioninstance_comite_relative->beans as $relative) {
            if ($relative->id != $conditioninstance->_relative->id) {
              $conditioninstance->comite_conditioninstance_comite_relative->delete($conditioninstance->id, $relative->id);
            }
          }
          $conditioninstance->comite_conditioninstance_comite_relative->add($conditioninstance->_relative);
        }
        $this->contact->comite_familyhealthhistory_contacts->add($this->family_health);
        if(!$this->errors) {
            $this->contact->hla_survey_step_c = 'hla_personal_health';
        }
        $this->contact->save();
        $this->user->save();
      }
    }

    if (!count($this->relatives)) {
      $new = new comite_Relative();
      $new->delete = 1;
      $new->relation = '';
      $this->relatives[] = $new;
    }
    if (!count($this->conditioninstances)) {
      $new = new comite_ConditionInstance();
      $new->delete = 1;
      $new->name = reset(array_keys($this->app_list_strings['health_condition']));
      $this->conditioninstances[] = $new;
    }
    return parent::process();
  }
}
