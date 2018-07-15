<?php
/**
 * @file
 * jc_features.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function jc_features_taxonomy_default_vocabularies() {
  return array(
    'vocab_kwesy_slider' => array(
      'name' => 'Slider Placement',
      'machine_name' => 'vocab_kwesy_slider',
      'description' => 'This vocabulary create for Slider placements',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
