<?php
include_once(dirname(__FILE__).'/ComiteForm.php');

abstract class HlaForm extends ComiteForm {
  public function __construct($user) {
    global $beanList,
        $beanFiles,
        $sugar_config,
        $app_list_strings,
        $mod_strings,
        $db;

    $this->app_list_strings = $app_list_strings;

    $this->user = $user;
    $this->user->get_linked_beans('contacts_users_1', 'Contact');

    // one2one, always present. user was created by contact.
    $this->contact = $this->user->contacts_users_1->beans[reset(array_keys($this->user->contacts_users_1->beans))];
  }

  static function createAndDisplay($steps, $view) {
    global $current_user;


    $user = $current_user;
    $user->get_linked_beans('contacts_users_1', 'Contact');
    $contact = $user->contacts_users_1->beans[reset(array_keys($user->contacts_users_1->beans))];

    if(empty($contact->hla_survey_step_c) || $contact->hla_survey_step_c < 0) {
        $default = reset(array_keys($steps));
    } else {
        $default = $contact->hla_survey_step_c;
    }
    $step = array_key_exists('step', $_REQUEST) ? strtolower(trim($_REQUEST['step'])) : $default;
    if (!in_array($step, array_keys($steps))) {
      $step = $default;
    }
    $class = self::under2camel($step.'_form');
    if (substr($class, 0, 3) != 'Hla' || substr($class, -4) != 'Form' || strlen($class) < 8 || !class_exists($class)) {
      $class = self::under2camel($default.'_form');
    }
    $template = substr(self::camel2under($class), 0, -5) . '.tpl';

    # Next
    reset($steps);
    while($current = current($steps)) {
      if($step == key($steps)) {
        next($steps);
        $next = key($steps);
        break;
      }
      next($steps);
    }

    $form = new $class($current_user);
    $form->process();

    $view->ss->assign('FORM', $form);
    $form_content = $view->ss->fetch('modules/comite_Portal/tpls/' . $template);

    $view->ss->assign('FORM_CONTENT', $form_content);
    $view->ss->assign('STEPS', $steps);
    $view->ss->assign('STEP', $step);
    $view->ss->assign('NEXT', $next);
    echo $view->ss->fetch('modules/comite_Portal/tpls/hla_form.tpl');

    return $form;
  }

  public function process() {
    if (!$this->get('is_ajax_call') && !$this->errors) {
      if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Save & Logout') {
        header("Location: index.php?module=Users&action=Logout");
        exit;
      }
      if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Save & Continue to the Next Step →' && array_key_exists('next', $_REQUEST) && array_key_exists('step', $_REQUEST) && $_REQUEST['step'] != $_REQUEST['next'] && $_REQUEST['next'] != 'undefined' && $_REQUEST['next'] != '') {
        header("Location: index.php?module=comite_Portal&action=hla&step=" . $_REQUEST['next']);
        exit;
      }
      elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("Location: index.php?module=comite_Portal&action=hla&step=${_REQUEST['step']}");
        exit;
      }
    }
    # Allow logout, even with errors if we're saving, even with errors.
    if(!$this->get('is_ajax_call') && isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'Save & Logout' && (ComiteForm::SAVE_FORM_EVEN_ON_ERROR||!$this->errors)) {
        header("Location: index.php?module=Users&action=Logout");
        exit;
    }
    return parent::process();
  }
}
