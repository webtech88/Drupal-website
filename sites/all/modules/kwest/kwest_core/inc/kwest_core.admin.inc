<?php

//Social links tab on admin/config/kwest/jc-core
function _kwest_core_admin_settings(){
    module_load_include('inc', 'kwest_core', 'inc/kwest_core.forms');
    $kwest_core_form = drupal_get_form('kwest_jc_core');
    return $kwest_core_form;
}
