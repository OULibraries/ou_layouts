<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Exhibits'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_exhibit.png',
  'theme' => 'ou_exhibit',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
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
