<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Intranet Profile'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_intranet_profile.png',
  'theme' => 'ou_intranet_profile',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
	'sidebar' => t('Sidebar'),
    'body' => t('Body'),
	'bottom' => t('Bottom'),
	
  ),
);
