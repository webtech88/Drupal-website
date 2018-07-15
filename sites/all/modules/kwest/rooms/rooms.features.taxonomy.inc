<?php
/**
 * @file
 * rooms.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function rooms_taxonomy_default_vocabularies() {
  return array(
    'room_attributes' => array(
      'name' => 'Room attributes',
      'machine_name' => 'room_attributes',
      'description' => 'Icons and terms for all room features',
      'hierarchy' => 1,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
