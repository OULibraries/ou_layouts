<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Locations'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_locations.png',
  'theme' => 'ou_locations',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'header_img' => t('Header Image'),
    'header_side' => t('Header Side'),
    'description' => t('Location Description'),
	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
	'footerl' => t('Footer Left'),
	'footerr' => t('Footer Right'),
  ),
);
