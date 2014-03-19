<?php
foreach($module_menu as $key => $menus_defs){
    if(stristr($menus_defs[0], 'ImportVCard')){
        unset($module_menu[$key]);
    }
    elseif(stristr($menus_defs[0], 'Import&')){
        unset($module_menu[$key]);
    }
}