<?php

function smarty_modifier_form_value_decimal($string) {
  return preg_replace('#\.0+$#', '', $string);
}