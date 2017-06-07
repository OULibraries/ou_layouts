<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Marketing'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_marketing.png',
  'theme' => 'ou_marketing',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'tleft' => t('Top Left'),
    'tright' => t('Top Right'),
	'middle' => t('Middle'),
	'bleft' => t('Bottom Left'),
    'bright' => t('Bottom Right'),
  ),
);
