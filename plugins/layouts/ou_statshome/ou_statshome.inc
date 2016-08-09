<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Stats Home'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_statshome.png',
  'theme' => 'ou-statshome',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'glance-header' => t('At a Glance Header'),
	'glance-stats1' => t('Stat 1'),
	'glance-stats2' => t('Stat 2'),
	'glance-stats3' => t('Stat 3'),
	'glance-stats4' => t('Stat 4'),
    'top' => t('Top'),
    'tleft' => t('Top Left'),
    'tright' => t('Top Right'),
	'mheader' => t('Middle Header'),
	'mleft' => t('Middle Left'),
    'mright' => t('Middle Right'),
	'bleft' => t('Bottom Left'),
    'bright' => t('Bottom Right'),
    'bottom' => t('Bottom'),
  ),
);
