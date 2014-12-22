<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns Stacked'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_twocol_stacked.png',
  'theme' => 'ou_twocol_stacked',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
    'bottom' => t('Bottom'),
  ),
);
