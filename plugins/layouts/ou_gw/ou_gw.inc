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
    'tleft' => t('Top Left'),
	'tmiddle' => t('Top Middle'),
    'tright' => t('Top Right'),
	'middle' => t('Middle'),
	'mdetail' => t('Middle Detail'),
	'mleft' => t('Middle Left'),
	'mmiddle' => t('Middle Middle'),
    'mright' => t('Middle Right'),
	'bleft' => t('Bottom Left'),
    'bright' => t('Bottom Right'),
    'bottom' => t('Bottom'),
  ),
);
