<?php
if (!function_exists('property_exists')) {
  function property_exists($class, $property) {
    if (is_object($class)) {
      $vars = get_object_vars($class);
    } else {
      $vars = get_class_vars($class);
    }
    return array_key_exists($property, $vars);
  }
}

class ComiteForm {
  public $ajax = false;
  public $errors = array();

  const SAVE_FORM_EVEN_ON_ERROR = true;

  static function stdClass() {
    static $instance;
    return $instance ? $instance : $instance = new stdClass();
  }

  /**
   * Indicate whether or not the field name is present in the request data, or optionally the 2nd passed parameter
   *
   * @param string $field
   * @param object|array $data
   * @return boolean
   */
  public function has($field/*, $data */) {
    $data = $_REQUEST;
    if (func_num_args() > 1) {
      $data = func_get_arg(1);
    }
    if (is_array($data)) {
      return array_key_exists($field, $data);
    }
    if (is_object($data)) {
      return property_exists($data, $field);
    }
    return false;
  }

  /**
   * Load the value for the field name from the request data, or optionally the 2nd passed parameter
   *
   * @param string $field
   * @param object|array $data
   * @return boolean
   */
  public function get($field/*, $data */) {
    $data = $_REQUEST;
    if (func_num_args() > 1) {
      $data = func_get_arg(1);
    }
    if (is_array($data)) {
      return array_key_exists($field, $data) ? $data[$field] : null;
    }
    if (is_object($data)) {
      return property_exists($data, $field) ? $data->$field : null;
    }
    return null;
  }

  /**
   * Run this to process the request.
   *
   * When extending: Self-check for form submit status on a known hidden input prior to processing.
   */
  public function process() {
    // maybe make use of formbase.php stuff... see ContactFormBase.php::handleSave for examples
    if ($this->get('is_ajax_call')) {
      ob_get_clean();
      $this->ajax = 1;
      $json = getJSONobj();
      header("Content-type: application/json");
      // @TODO format response, include errors if relevant
      if ($this->errors) {
        echo $json->encode(array(
          'success' => '0',
          'errors' => $this->errors
        ));
      } else {
        echo $json->encode(array(
          'success' => '1',
        ));
      }
      // @TODO exit? or maybe something else here instead
      exit;
    }

    return $this->errors ? false : true;

      // @TODO what's a tracker & a monitor, and do we need them?

//    	$trackerManager = TrackerManager::getInstance();
//        $timeStamp = TimeDate::getInstance()->nowDb();
//        if($monitor = $trackerManager->getMonitor('tracker')){
//	        $monitor->setValue('action', 'detailview');
//	        $monitor->setValue('user_id', $GLOBALS['current_user']->id);
//	        $monitor->setValue('module_name', 'Contacts');
//	        $monitor->setValue('date_modified', $timeStamp);
//	        $monitor->setValue('visible', 1);
//
//	        if (!empty($this->bean->id)) {
//	            $monitor->setValue('item_id', $return_id);
//	            $monitor->setValue('item_summary', $focus->get_summary_text());
//	        }
//			$trackerManager->saveMonitor($monitor, true, true);
//		}
//        return null;
//    }
  }

  public function error($field, $error = false) {
    if ($error) {
      if (!array_key_exists($field, $this->errors)) {
        $this->errors[$field] = array();
      }
      $this->errors[$field][] = $error;
    } else {
      return array_key_exists($field, $this->errors) && count($this->errors[$field]) ? $this->errors[$field] : false;
    }
  }

  public function bind($bean, $fields/*, $prefix, $data */) {
    $prefix = '';
    $data = $_REQUEST;
    if (func_num_args() == 4) {
      $prefix = func_get_arg(2);
      $data = func_get_arg(3);
    }

    foreach($fields as $field => $options) {
      if (!$this->has($field, $data)) {
        continue;
      }

      $value = $this->get($field, $data);
      if (isset($options['validators'])) {
        foreach($options['validators'] as $validator) {
          $this->validate($value, $field, $options, $validator, $prefix, $data);
        }
      }
      $name = isset($options['name']) ? $options['name'] : $field;
      if (!property_exists($bean, $name) || !is_null($bean->{$name}) || strlen($value)) {
        $bean->{$name} = $value;
      }
    }
  }

  public function bindOneToMany($fieldName, $instanceName, $relatedClassName, $fields, $recordSaveCondition = null) {
    if ($this->has($fieldName)) {
      $objects = array();
      foreach ($this->get($fieldName) as $key => $postObject) {
        $update = false;
        foreach ($this->$instanceName as $theObject) {
          if ($this->has('record', $postObject) && $this->get('record', $postObject) == $theObject->id && strlen($this->get('record', $postObject))) {
            $update = $theObject;
            break;
          }
        }

        if($recordSaveCondition) {
          eval("\$recordSaveConditionExecuted = $recordSaveCondition;");
          if(!$recordSaveConditionExecuted) {
            $postObject['delete'] = true;
          }
        }

        if ($update) {
          if ($this->has('delete', $postObject) && $this->get('delete', $postObject)) {
            // delete this record
            $theObject->mark_deleted($theObject->id);
            continue;
          } else {
            // update this record
            $theObject = $update;
          }
        } else {
          // skip records marked for deletion
          if ($this->has('delete', $postObject) && $this->get('delete', $postObject)) {
            continue;
          }

          // create new record
          $theObject = new $relatedClassName();
          $theObject->id = create_guid();
          $theObject->new_with_id = true;
        }

        $theObject->_many_key = $key;
        $this->bind($theObject, $fields, $fieldName.'__'.$key.'__', $postObject);
        $objects[] = $theObject;
      }
      $this->$instanceName = $objects;
    }
  }

  public function validate($value, $field, $options, $validator, $prefix, $data) {
    if (isset($validator['callable']) && is_callable($validator['callable'])) {
      return call_user_func($validator['callable'], $value, $validator, $this, $field, $prefix, $data);
    }
  }

  static function validateRequired($value, $options, $form, $field, $prefix, $data) {
    if (!strlen(trim($value))) {
      $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Required.');
    }
  }

  static function validateRegex($value, $options, $form, $field, $prefix, $data) {
    if (!preg_match($options['regex'], $value)) {
      $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Invalid.');
    }
  }

  static function validateInteger($value, $options, $form, $field, $prefix, $data) {
    self::validateRegex($value, array_merge(array('regex' => '#^\d*$#', 'message' => 'Must be an integer.'), $options), $form, $field, $prefix, $data);
  }

  static function validateDecimal($value, $options, $form, $field, $prefix, $data) {
    self::validateRegex($value, array_merge(array('regex' => '#^\d*(\.\d+)?$#', 'message' => 'Must be an number.'), $options), $form, $field, $prefix, $data);
  }

  static function validateLength($value, $options, $form, $field, $prefix, $data) {
    if (isset($options['min'])) {
      if (strlen(trim($value)) < $options['min']) {
        $form->error($prefix.$field, isset($options['min_message']) ? $options['min_message'] : 'Must be at least ' . $options['min'] . ' characters long.');
      }
    }
  }

  static function validateNotEqual($value, $options, $form, $field, $prefix, $data) {
    if (isset($options['compare'])) {
      if (trim($value) == trim($form->get($options['compare'], $data))) {
        $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Must not be the same value.');
      }
    }
  }

  static function validateRequiredIf($value, $options, $form, $field, $prefix, $data) {
    if(!isset($options['inverse'])) {
      if (trim($form->get($options['field'], $data)) == $options['field_answer'] && !strlen(trim($value))) {
        $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Required because '.$options['field'].' is '.$options['field_answer'].'.');
      }
    } else {
      if (trim($form->get($options['field'], $data)) != $options['field_answer'] && !strlen(trim($value))) {
        $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Required because '.$options['field'].' is '.$options['field_answer'].'.');
      }
    }
  }

  static function validateRequiredIfNotBlank($value, $options, $form, $field, $prefix, $data) {
    if (trim($form->get($options['field'], $data)) && !strlen(trim($value))) {
      $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Required.');
    }
  }

  static function validateEmail($value, $options, $form, $field, $prefix, $data) {
    if(strlen(trim($value)) && !filter_var(trim($value), FILTER_VALIDATE_EMAIL)){
      $form->error($prefix.$field, isset($options['message']) ? $options['message'] : 'Must be a valid email.');
    }
  }

  static function sentenceToKey($string) {
    return strtolower(str_replace(' ', '_', $string));
  }

  static function keyToSentence($string) {
    return ucfirst(str_replace('_', ' ', $string));
  }

  /**
   * underscored to upper-camelcase
   * e.g. "this_method_name" -> "ThisMethodName"
   *
   * @param type $string
   * @return type string
   */
  static function under2camel($string) {
    return preg_replace('/(?:^|_)(.?)/e',"strtoupper('$1')",$string);
  }

  /**
   * camelcase (lower or upper) to underscored
   * e.g. "thisMethodName" -> "this_method_name"
   * e.g. "ThisMethodName" -> "this_method_name"
   *
   * @param type $string
   * @return type string
   */
  static function camel2under($string) {
    return strtolower(preg_replace('/([^A-Z])([A-Z])/', "$1_$2", $string));
  }

  static function array2Csv($data, $delimiter = ',', $enclosure = '"') {
    if (!is_array($data) || !count($data)) {
      return '';
    }
    $handle = fopen('php://temp', 'r+');
    fputcsv($handle, $data, $delimiter, $enclosure);
    rewind($handle);
    $contents = '';
    while (!feof($handle)) {
       $contents .= fread($handle, 8192);
    }
    fclose($handle);
    return $contents;
  }

  static function csv2Array($data, $delimiter = ',', $enclosure = '"') {
    if(!strlen($data)) {
      return array();
    }
    $handle = fopen('php://temp', 'r+');
    fputs($handle, $data);
    rewind($handle);
    return fgetcsv($handle, 0, $delimiter, $enclosure);
  }

  static function smarty_function_form_input_text($params, &$smarty) {
    $html = '<input ';
    if (!$params['type']) {
      $params['type'] = 'text';
    }
    if ($errors = $params['_form']->error($params['_error'] ? $params['_error'] : $params['id'])) {
      $params['class'] .= ($params['class'] ? ' ' : '') . 'error';
      $params['title'] .= ($params['title'] ? ' ' : '') . implode("\n", $errors);
    }
    foreach($params as $name => $value) {
      if (substr($name, 0, 1) == '_') {
        continue;
      }
      $html .= ' ' . $name . '="' . htmlentities($value) . '"';
    }
    $html .= ' />';
    if ($params['_label']) {
      $label_params = array('for' => $params['id'], '_error' => $params['_error'], '_form' => $params['_form'], '_html' => $params['_label']);
      if (is_array($params['_label'])) {
        $label_params = array_merge($label_params, array('_html' => ''), $params['_label']);
      }
      $html = self::smarty_function_form_label($label_params, $smarty) . $html;
    }
    return $html;
  }

  static function smarty_function_form_label($params, &$smarty) {
    $html = '<label ';
    if ($errors = $params['_form']->error($params['_error'] ? $params['_error'] : $params['for'])) {
      $params['class'] .= ($params['class'] ? ' ' : '') . 'error';
    }
    foreach($params as $name => $value) {
      if (substr($name, 0, 1) == '_') {
        continue;
      }
      $html .= ' ' . $name . '="' . htmlentities($value) . '"';
    }
    $html .= '>' . $params['_html'] . '</label>';
    return $html;
  }

  static function smarty_function_form_select($params, &$smarty) {
    $html = '<select ';
    if ($errors = $params['_form']->error($params['_error'] ? $params['_error'] : $params['id'])) {
      $params['class'] .= ($params['class'] ? ' ' : '') . 'error';
    }
    foreach($params as $name => $value) {
      if (substr($name, 0, 1) == '_') {
        continue;
      }
      $html .= ' ' . $name . '="' . htmlentities($value) . '"';
    }
    $html .= '>'."\n";
    if (array_key_exists('_default', $params) && $params['_empty'] !== false && is_null($params['_value'])) {
      $params['_value'] = $params['_default'];
    }
    if (array_key_exists('_empty', $params) && $params['_empty'] !== 0 && $params['_empty'] !== '0' && $params['_empty'] !== false) {
      $html .= '<option value="">' . (($params['_empty'] === true || $params['_empty'] === '1' || $params['_empty'] === 1) ? '' : htmlentities($params['_empty'])) . '</option>'."\n";
    }
    foreach($params['_options'] as $key => $value) {
      $html .= '<option value="' . htmlentities($key) . '"' . ((strlen(trim($params['_value'])) && trim($key) == trim($params['_value'])) ? ' selected="selected"' : '') . '>'. htmlentities($value) . '</option>'."\n";
    }
    if ($params['_other']) {
      $html .= '<option value="'.$params['_other'].'"' . ((trim($params['_value']) && !array_key_exists(trim($params['_value']), $params['_options'])) ? ' selected="selected"' : '') . '>' . htmlentities($params['_other']) . '</option>'."\n";
    }
    $html .= '</select>';
    if ($params['_label']) {
      $label_params = array('for' => $params['id'], '_error' => $params['_error'], '_form' => $params['_form'], '_html' => $params['_label']);
      if (is_array($params['_label'])) {
        $label_params = array_merge($label_params, array('_html' => ''), $params['_label']);
      }
      $html = self::smarty_function_form_label($label_params, $smarty) . $html;
    }
    return $html;
  }

  static function smarty_function_form_radio($params, &$smarty) {
    $html = '<input type="hidden" class="progressignore" id="'.$params['id'].'" name="'.$params['name'].'" value="" />'.PHP_EOL;
    $attributes = '';
    if ($errors = $params['_form']->error($params['_error'] ? $params['_error'] : $params['id'])) {
      $params['class'] .= ($params['class'] ? ' ' : '') . 'error';
    }
    foreach($params as $name => $value) {
      if (substr($name, 0, 1) == '_' || $name =='_id') {
        continue;
      }
      $attributes .= ' ' . $name . '="' . htmlentities($value) . '"';
    }
    if (array_key_exists('_default', $params) && $params['_empty'] !== false && is_null($params['_value'])) {
      $params['_value'] = $params['_default'];
    }
    foreach($params['_options'] as $key => $value) {
      $id = $params['id'] . '__' . self::sentenceToKey($value);

      $html .= '<input type="radio" id="'.$id.'"'
        . $attributes
        .' value="' . htmlentities($key) . '"' . ((strlen(trim($params['_value'])) && trim($key) == trim($params['_value'])) ? ' checked="checked"' : '') .' />'.PHP_EOL.'<label for="'.$id.'">'. htmlentities($value) . '</label>'."\n";
    }
    if ($params['_other']) {
      $html .= '<input type="radio" '.$attributes.' value="'.$params['_other'].'"' . ((trim($params['_value']) && !array_key_exists(trim($params['_value']), $params['_options'])) ? ' selected="selected"' : '') . '>' . htmlentities($params['_other']) . '</option>'."\n";
    }
    if ($params['_label']) {
      $label_params = array('for' => $params['id'], '_error' => $params['_error'], '_form' => $params['_form'], '_html' => $params['_label']);
      if (is_array($params['_label'])) {
        $label_params = array_merge($label_params, array('_html' => ''), $params['_label']);
      }
      $html = self::smarty_function_form_label($label_params, $smarty) . $html;
    }
    return $html;
  }

  static function smarty_function_form_textarea($params, &$smarty) {
    $html = '<textarea ';
    if ($errors = $params['_form']->error($params['_error'] ? $params['_error'] : $params['id'])) {
      $params['class'] .= ($params['class'] ? ' ' : '') . 'error';
    }
    foreach($params as $name => $value) {
      if (substr($name, 0, 1) == '_') {
        continue;
      }
      $html .= ' ' . $name . '="' . htmlentities($value) . '"';
    }
    $html .= '>' . htmlentities(html_entity_decode($params['_value'], ENT_QUOTES), ENT_NOQUOTES) . '</textarea>';
    if ($params['_label']) {
      $label_params = array('for' => $params['id'], '_error' => $params['_error'], '_form' => $params['_form'], '_html' => $params['_label']);
      if (is_array($params['_label'])) {
        $label_params = array_merge($label_params, array('_html' => ''), $params['_label']);
      }
      $html = self::smarty_function_form_label($label_params, $smarty) . $html;
    }
    return $html;
  }
}