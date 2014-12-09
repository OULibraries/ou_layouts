<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Home'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_home.png',
  'theme' => 'ou-home',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'tleft' => t('Top Left'),
    'tmid' => t('Top Middle'),
	'tright' => t('Top Right'),
    'bottom1' => t('Bottom Locations'),
    'bottom2' => t('Bottom Announcements'),
	'bottom3' => t('Bottom'),
  ),
);
