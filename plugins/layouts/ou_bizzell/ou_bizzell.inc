<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Bizzell'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_bizzell.png',
  'theme' => 'ou_bizzell',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'header_img' => t('Header Image'),
    'header_side' => t('Header Side'),
    'description' => t('Location Description'),
	'top' => t('Top'),
    'tleft' => t('Top Left'),
    'tright' => t('Top Right'),
	'middle' => t('Middle'),
	'mleft' => t('Middle Left'),
    'mright' => t('Middle Right'),
	'bottom' => t('Bottom'),
	'footerl' => t('Footer Left'),
	'footerm' => t('Footer Middle'),
	'footerr' => t('Footer Right'),
  ),
);
