<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU GW'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_gw.png',
  'theme' => 'ou-gw',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
	'mleft' => t('Middle Left'),
	'mmiddle' => t('Middle Middle'),
    'mright' => t('Middle Right'),
	'mid-bottom-left' => t('Middle Bottom Left'),
    'mid-bottom-right' => t('Middle Bottom Right'),
    'bottom' => t('Bottom'),
  ),
);
