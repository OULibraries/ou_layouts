<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns Brick'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_twocol_brick.png',
  'theme' => 'ou_twocol_brick',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'tleft' => t('Top Left'),
    'tright' => t('Top Right'),
	'header' => t('Middle Header')
	'mleft' => t('Middle Left'),
    'mright' => t('Middle Right'),
	'bleft' => t('Bottom Left'),
    'bright' => t('Bottom Right'),
    'bottom' => t('Bottom'),
  ),
);
