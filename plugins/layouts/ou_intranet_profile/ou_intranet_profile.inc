<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Intranet Sidebar'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_intranet_sidebar.png',
  'theme' => 'ou_intranet_sidebar',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
	'sidebar' => t('Sidebar'),
    'body' => t('Body'),
	'bottom' => t('Bottom'),
	
  ),
);
