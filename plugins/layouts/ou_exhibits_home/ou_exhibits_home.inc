<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Exhibits Homepage'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_exhibits_home.png',
  'theme' => 'ou_exhibits_home',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'tleft' => t('Top Left'),
    'tright' => t('Top Right'),
	'mleft1' => t('Middle Left Top'),
	'mright1' => t('Middle Right Top'),
	'mheader' => t('Middle Header'),
	'mleft' => t('Middle Left'),
    'mright' => t('Middle Right'),
	'bleft' => t('Bottom Left'),
    'bright' => t('Bottom Right'),
    'bottom' => t('Bottom'),
  ),
);