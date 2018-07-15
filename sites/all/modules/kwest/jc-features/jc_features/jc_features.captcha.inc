<?php
/**
 * @file
 * jc_features.captcha.inc
 */

/**
 * Implements hook_captcha_default_points().
 */
function jc_features_captcha_default_points() {
  $export = array();

  $captcha = new stdClass();
  $captcha->disabled = FALSE; /* Edit this to true to make a default captcha disabled initially */
  $captcha->api_version = 1;
  $captcha->form_id = 'kwest_contact_contact_form';
  $captcha->module = '';
  $captcha->captcha_type = 'default';
  $export['kwest_contact_contact_form'] = $captcha;

  return $export;
}
