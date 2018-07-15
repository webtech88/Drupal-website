<?php

/**
 * New path form definition
 */
function metatagpath_form($form, &$form_state, $path) {
	$form = array(
		'actions' => array(
			'#weight' => 100,
			'#type' => 'actions',
			'submit' => array(
				'#type' => 'submit',
				'#value' => t('Save'),
			),
		),
	);

	field_attach_form('metatagpath', $path, $form, $form_state);

	# We add it here, because if it's added BEFORE field_attach_form,
	# The pathauto module adds some magic to this field.
	$form['path'] = array(
		'#type' => 'textfield',
		'#title' => t('Path'),
		'#weight' => 0,
		'#required' => true,
	);

	if (isset($path->path))
		$form['path']['#default_value'] = $path->path;

	return $form;
}


/**
 * New path form validate callback
 */
function metatagpath_form_validate($form, &$form_state) {
	$path = $form_state['values']['path'];
	$path = drupal_get_normal_path($path);
	if (!drupal_valid_path($path, true) || url_is_external($path))
		form_set_error('path', t('Invalid path'));
	elseif ($form_state['op'] == 'add' && entity_load('metatagpath', false, array('path' => $path)))
		form_set_error('path', t('This path already has metatags'));
	else
		form_set_value($form['path'], $path, $form_state);
}


/**
 * New path form submit callback
 */
function metatagpath_form_submit($form, &$form_state) {
	$path = entity_ui_form_submit_build_entity($form, $form_state);
	field_attach_presave('metatagpath', $path);
	$path->save();
	$form_state['redirect'] = 'admin/config/search/metatags/paths';
}
