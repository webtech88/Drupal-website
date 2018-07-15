<?php
/**
 * @file
 * jc_features.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function jc_features_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: management_clean-urls:admin/config/search/clean-urls.
  $menu_links['management_clean-urls:admin/config/search/clean-urls'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/search/clean-urls',
    'router_path' => 'admin/config/search/clean-urls',
    'link_title' => 'Clean URLs',
    'options' => array(
      'attributes' => array(
        'title' => 'Enable or disable clean URLs for your site.',
      ),
      'identifier' => 'management_clean-urls:admin/config/search/clean-urls',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 5,
    'customized' => 0,
    'parent_identifier' => 'management_search-and-metadata:admin/config/search',
  );
  // Exported menu link: management_clientside-validation:admin/config/validation/clientside_validation.
  $menu_links['management_clientside-validation:admin/config/validation/clientside_validation'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/validation/clientside_validation',
    'router_path' => 'admin/config/validation/clientside_validation',
    'link_title' => 'Clientside Validation',
    'options' => array(
      'attributes' => array(
        'title' => 'Administer clientside validation.',
      ),
      'identifier' => 'management_clientside-validation:admin/config/validation/clientside_validation',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
    'parent_identifier' => 'management_validation:admin/config/validation',
  );
  // Exported menu link: management_manage-instagram-feeds:admin/config/services/instagram_social_feed.
  $menu_links['management_manage-instagram-feeds:admin/config/services/instagram_social_feed'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/services/instagram_social_feed',
    'router_path' => 'admin/config/services/instagram_social_feed',
    'link_title' => 'Manage Instagram feeds',
    'options' => array(
      'attributes' => array(
        'title' => 'Administer Instagram feeds.',
      ),
      'identifier' => 'management_manage-instagram-feeds:admin/config/services/instagram_social_feed',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
    'parent_identifier' => 'management_web-services:admin/config/services',
  );
  // Exported menu link: management_url-aliases:admin/config/search/path.
  $menu_links['management_url-aliases:admin/config/search/path'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/search/path',
    'router_path' => 'admin/config/search/path',
    'link_title' => 'URL aliases',
    'options' => array(
      'attributes' => array(
        'title' => 'Change your site\'s URL paths by aliasing them.',
      ),
      'identifier' => 'management_url-aliases:admin/config/search/path',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 0,
    'weight' => -5,
    'customized' => 0,
    'parent_identifier' => 'management_search-and-metadata:admin/config/search',
  );
  // Exported menu link: management_url-redirects:admin/config/search/redirect.
  $menu_links['management_url-redirects:admin/config/search/redirect'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/search/redirect',
    'router_path' => 'admin/config/search/redirect',
    'link_title' => 'URL redirects',
    'options' => array(
      'attributes' => array(
        'title' => 'Redirect users from one URL to another.',
      ),
      'identifier' => 'management_url-redirects:admin/config/search/redirect',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 1,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
    'parent_identifier' => 'management_search-and-metadata:admin/config/search',
  );
  // Exported menu link: management_webforms:admin/config/validation/clientside_validation/webforms.
  $menu_links['management_webforms:admin/config/validation/clientside_validation/webforms'] = array(
    'menu_name' => 'management',
    'link_path' => 'admin/config/validation/clientside_validation/webforms',
    'router_path' => 'admin/config/validation/clientside_validation/webforms',
    'link_title' => 'Webforms',
    'options' => array(
      'attributes' => array(
        'title' => 'Override settings for webforms.',
      ),
      'identifier' => 'management_webforms:admin/config/validation/clientside_validation/webforms',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 11,
    'customized' => 0,
    'parent_identifier' => 'management_clientside-validation:admin/config/validation/clientside_validation',
  );
  // Exported menu link: menu-social-menu_instagram:https://www.instagram.com/kwesthotel/.
  $menu_links['menu-social-menu_instagram:https://www.instagram.com/kwesthotel/'] = array(
    'menu_name' => 'menu-social-menu',
    'link_path' => 'https://www.instagram.com/kwesthotel/',
    'router_path' => '',
    'link_title' => 'Instagram',
    'options' => array(
      'attributes' => array(
        'rel' => 'nofollow',
        'class' => array(
          0 => 'hide-text',
          1 => 'icon-instagram',
        ),
        'target' => '_blank',
      ),
      'item_attributes' => array(
        'id' => '',
        'class' => '',
        'style' => '',
      ),
      'identifier' => 'menu-social-menu_instagram:https://www.instagram.com/kwesthotel/',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -50,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Clean URLs');
  t('Clientside Validation');
  t('Instagram');
  t('Manage Instagram feeds');
  t('URL aliases');
  t('URL redirects');
  t('Webforms');

  return $menu_links;
}
