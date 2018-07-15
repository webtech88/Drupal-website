<?php
/**
 * @file
 * jc_features.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function jc_features_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'additional_settings__active_tab_kwest_page_slider';
  $strongarm->value = 'edit-submission';
  $export['additional_settings__active_tab_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clear_all_kwest_page_slider';
  $strongarm->value = 0;
  $export['clear_all_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_default_settings';
  $strongarm->value = array(
    'validate_options' => array(
      'disable_html5' => '1',
      'captcha' => '1',
      'validate_onsubmit' => '1',
      'validate_onblur' => '1',
      'validate_onblur_always' => '0',
      'validate_onkeyup' => '1',
      'validate_before_ajax' => '0',
      'show_messages' => '0',
    ),
    'error' => array(
      'prefix' => '',
      'suffix' => '',
      'scrollto_errormessage' => 1,
      'scroll_speed' => '1000',
      'error_element' => 'label',
    ),
    'error_placement' => array(
      'error_placement_default' => '1',
      'jquery_selector' => '',
      'custom_error_function' => '',
    ),
    'include_hidden' => array(
      'include_hidden_fields' => 0,
      'validate_tabs' => 0,
      'include_hidden' => '',
    ),
  );
  $export['clientside_validation_default_settings'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_filter_paths';
  $strongarm->value = '0';
  $export['clientside_validation_filter_paths'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_override_jquery_form';
  $strongarm->value = '0';
  $export['clientside_validation_override_jquery_form'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_path_list';
  $strongarm->value = 'admin/structure/views/*
admin/structure/views/view/*
node/*/edit';
  $export['clientside_validation_path_list'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_use_minified';
  $strongarm->value = '1';
  $export['clientside_validation_use_minified'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_validate_all';
  $strongarm->value = '2';
  $export['clientside_validation_validate_all'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'clientside_validation_validate_specific';
  $strongarm->value = '';
  $export['clientside_validation_validate_specific'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_webform';
  $strongarm->value = '0';
  $export['comment_webform'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'default_instagram_social_feeds';
  $strongarm->value = array();
  $export['default_instagram_social_feeds'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'diff_enable_revisions_page_node_kwest_page_slider';
  $strongarm->value = 1;
  $export['diff_enable_revisions_page_node_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'diff_show_preview_changes_node_kwest_page_slider';
  $strongarm->value = 1;
  $export['diff_show_preview_changes_node_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'diff_view_mode_preview_node_kwest_page_slider';
  $strongarm->value = 'full';
  $export['diff_view_mode_preview_node_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_active_lists';
  $strongarm->value = array(
    0 => array(
      766410 => '766410',
      766278 => 0,
    ),
  );
  $export['dotmailer_active_lists'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_active_lists1';
  $strongarm->value = array(
    766410 => '766410',
    766278 => 0,
  );
  $export['dotmailer_active_lists1'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_books';
  $strongarm->value = array(
    766410 => (object) array(
      'Id' => 766410,
      'Name' => 'my test address book',
      'title' => 'K-West',
      'weight' => '0',
      'external_url' => '',
      'additional_recipients' => NULL,
      'roles' => array(
        1 => 1,
        2 => 1,
        11 => 1,
      ),
      'description' => '',
      'booktype' => 'optin',
      'doublein' => 1,
      'datafields' => array(
        'FIRSTNAME' => '',
        'FULLNAME' => '',
        'GENDER' => '',
        'LASTNAME' => '',
        'LASTSUBSCRIBED' => '',
        'POSTCODE' => '',
      ),
      'Username' => 'dotmailer_username1',
      'Password' => 'dotmailer_password1',
    ),
  );
  $export['dotmailer_books'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_password1';
  $strongarm->value = 'test12345';
  $export['dotmailer_password1'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_subscription_failure_message';
  $strongarm->value = 'We were unable to subscribe you at this time. Please try again later.';
  $export['dotmailer_subscription_failure_message'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_subscription_success_message';
  $strongarm->value = 'Thank you, you have been successfully subscribed.';
  $export['dotmailer_subscription_success_message'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_unsubscription_failure_message';
  $strongarm->value = 'We were unable to unsubscribe you at this time. Please try again later.';
  $export['dotmailer_unsubscription_failure_message'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_unsubscription_success_message';
  $strongarm->value = 'Thank you, you have been successfully unsubscribed.';
  $export['dotmailer_unsubscription_success_message'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_username1';
  $strongarm->value = 'apiuser-29399d4f1c62@apiconnector.com';
  $export['dotmailer_username1'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_user_edit';
  $strongarm->value = 0;
  $export['dotmailer_user_edit'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'dotmailer_user_register';
  $strongarm->value = 0;
  $export['dotmailer_user_register'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'features_admin_show_component_mailchimp_signup';
  $strongarm->value = 1;
  $export['features_admin_show_component_mailchimp_signup'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'features_component_locked_mailchimp_signup';
  $strongarm->value = 0;
  $export['features_component_locked_mailchimp_signup'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_field_collection_item__field_slider';
  $strongarm->value = array(
    'view_modes' => array(),
    'extra_fields' => array(
      'form' => array(),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_field_collection_item__field_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_node__kwest_page_slider';
  $strongarm->value = array(
    'view_modes' => array(
      'teaser' => array(
        'custom_settings' => TRUE,
      ),
      'full' => array(
        'custom_settings' => FALSE,
      ),
      'rss' => array(
        'custom_settings' => FALSE,
      ),
      'diff_standard' => array(
        'custom_settings' => FALSE,
      ),
      'token' => array(
        'custom_settings' => FALSE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'metatags' => array(
          'weight' => '7',
        ),
        'title' => array(
          'weight' => '0',
        ),
        'path' => array(
          'weight' => '6',
        ),
        'redirect' => array(
          'weight' => '5',
        ),
        'xmlsitemap' => array(
          'weight' => '4',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_node__kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_api_key';
  $strongarm->value = '404081819.915d4e0.b676650040944769a7610d426264db37';
  $export['instagram_social_feed_api_key'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_block_count';
  $strongarm->value = '8';
  $export['instagram_social_feed_block_count'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_client_id';
  $strongarm->value = '915d4e0c4ee64b5b8be76476ad85a297';
  $export['instagram_social_feed_client_id'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_client_secret';
  $strongarm->value = '8bfebfa6625046f89318eab11e9cb7ed';
  $export['instagram_social_feed_client_secret'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_feed_selection';
  $strongarm->value = '1';
  $export['instagram_social_feed_feed_selection'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_last_run';
  $strongarm->value = 1501488874;
  $export['instagram_social_feed_last_run'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_more_text';
  $strongarm->value = 'See More';
  $export['instagram_social_feed_more_text'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_more_uri';
  $strongarm->value = 'https://www.instagram.com/kwesthotel/';
  $export['instagram_social_feed_more_uri'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_redirect_uri';
  $strongarm->value = 'http://k-west.php56.vredko.pers/admin/config/services/instagram_social_feed/settings';
  $export['instagram_social_feed_redirect_uri'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_username';
  $strongarm->value = 'kwesthotel';
  $export['instagram_social_feed_username'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'instagram_social_feed_user_id';
  $strongarm->value = '404081819';
  $export['instagram_social_feed_user_id'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_action_kwest_page_slider';
  $strongarm->value = '404';
  $export['internal_nodes_action_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_nodes_kwest_page_slider';
  $strongarm->value = 0;
  $export['internal_nodes_nodes_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_blog_entry';
  $strongarm->value = '';
  $export['internal_nodes_url_blog_entry'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_gallery_item';
  $strongarm->value = '';
  $export['internal_nodes_url_gallery_item'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_homepage_link';
  $strongarm->value = '';
  $export['internal_nodes_url_homepage_link'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_kwest_page_slider';
  $strongarm->value = '';
  $export['internal_nodes_url_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_meeting_room';
  $strongarm->value = '';
  $export['internal_nodes_url_meeting_room'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_offer';
  $strongarm->value = '';
  $export['internal_nodes_url_offer'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_page';
  $strongarm->value = '';
  $export['internal_nodes_url_page'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_popup';
  $strongarm->value = '';
  $export['internal_nodes_url_popup'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'internal_nodes_url_room';
  $strongarm->value = '';
  $export['internal_nodes_url_room'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'kwest_contact_privacy_policy_url';
  $strongarm->value = 'privacy-policy';
  $export['kwest_contact_privacy_policy_url'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'kwest_link_box_link_url';
  $strongarm->value = '<front>';
  $export['kwest_link_box_link_url'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'kwest_slider_autoplay_602';
  $strongarm->value = 1;
  $export['kwest_slider_autoplay_602'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'kwest_slider_autoplay_timeout_602';
  $strongarm->value = '';
  $export['kwest_slider_autoplay_timeout_602'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'kwest_slider_wrap_class_602';
  $strongarm->value = '';
  $export['kwest_slider_wrap_class_602'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'mailchimp_cron';
  $strongarm->value = 0;
  $export['mailchimp_cron'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_kwest_page_slider';
  $strongarm->value = array();
  $export['menu_options_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_kwest_page_slider';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'metatag_enable_node__slider';
  $strongarm->value = TRUE;
  $export['metatag_enable_node__slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'metatag_enable_node__webform';
  $strongarm->value = TRUE;
  $export['metatag_enable_node__webform'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'metatag_enable_taxonomy_term__vocab_kwesy_slider';
  $strongarm->value = TRUE;
  $export['metatag_enable_taxonomy_term__vocab_kwesy_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_kwest_page_slider';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_kwest_page_slider';
  $strongarm->value = '1';
  $export['node_preview_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_kwest_page_slider';
  $strongarm->value = 0;
  $export['node_submitted_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'save_continue_slider';
  $strongarm->value = 'Save and add fields';
  $export['save_continue_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'sync_translations_kwest_page_slider';
  $strongarm->value = '0';
  $export['sync_translations_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'webform_blocks';
  $strongarm->value = array(
    'client-block-1500' => array(
      'display' => 'form',
      'pages_block' => '1',
      'confirmation_block' => '0',
    ),
  );
  $export['webform_blocks'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'webform_node_webform';
  $strongarm->value = TRUE;
  $export['webform_node_webform'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_default_kwest_page_slider';
  $strongarm->value = '0';
  $export['weight_default_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_enabled_kwest_page_slider';
  $strongarm->value = '1';
  $export['weight_enabled_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_menu_kwest_page_slider';
  $strongarm->value = '0';
  $export['weight_menu_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'weight_range_kwest_page_slider';
  $strongarm->value = '20';
  $export['weight_range_kwest_page_slider'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'xmlsitemap_settings_node_kwest_page_slider';
  $strongarm->value = array(
    'entity' => 'node',
    'bundle' => 'slider',
    'info' => array(
      'label' => 'Slider',
      'admin' => array(
        'path' => 'admin/structure/types/manage/%node_type',
        'real path' => 'admin/structure/types/manage/slider',
        'bundle argument' => 4,
        'access arguments' => array(
          0 => 'administer content types',
        ),
      ),
      'xmlsitemap' => array(
        'entity' => 'node',
        'bundle' => 'slider',
        'status' => '0',
        'priority' => '0.5',
      ),
    ),
    'status' => '0',
    'priority' => '0.5',
  );
  $export['xmlsitemap_settings_node_kwest_page_slider'] = $strongarm;

  return $export;
}
