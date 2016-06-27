<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Stats'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_stats.png',
  'theme' => 'ou_stats',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'tleft' => t('Top Left'),
	'tleft2' => t('Top Left 2'),
    'tright' => t('Top Right'),
	'mheader' => t('Middle Header'),
	'mleft' => t('Middle Left'),
    'mright' => t('Middle Right'),
	'bleft' => t('Bottom Left'),
    'bright' => t('Bottom Right'),
    'bottom' => t('Bottom'),
    'mleft1of3' => t('Middle Left Third1'),
    'mleft2of3' => t('Middle Left Third2'),
    'mleft3of3' => t('Middle Left Third3'),
    'bleft1of2' => t('Bottom Left Half1'),
    'bleft2of2' => t('Bottom Left Half2'),
  ),
);
