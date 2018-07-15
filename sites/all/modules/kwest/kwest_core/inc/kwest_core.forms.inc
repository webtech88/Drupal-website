<?php

// Social links form in admin panel
function kwest_jc_core($form, &$form_state){
	$kwest_core_data = variable_get('kwest_core_settings', '');
    $pretty_messages = (!empty($kwest_core_data['messages'])) ? $kwest_core_data['messages'] : 0;

	$form['kwest_core_settings'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Settings K-West JC Core'), 
		'#collapsible' => FALSE, 
		'#collapsed' => FALSE,
		'#tree' => TRUE,
	);
	$form['kwest_core_settings']['messages'] = array(
		'#type' => 'checkbox',
        '#options' => array(t('Yes'), t('No')),
		'#title' => t('Pretty Messages (Noty style)'),
		'#default_value' => $pretty_messages,
	);
	/*$form['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Save'),
	);*/
	
	return system_settings_form($form);
}

/*function kwest_jc_core_submit($form, &$form_state){
	$form_values = $form_state['values'];
	variable_set('kwest_core_settings', $form_values);
	drupal_set_message(t('Changes saved'));
}*/