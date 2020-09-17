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
    'chartshead' => t('Charts Header'),
    'chleft' => t('Charts Left'),
    'chmidleft' => t('Charts Middle Left'),
    'chmidright' => t('Charts Middle Right'),
    'chright' => t('Charts Right'),
    'chartsfoot' => t('Charts Footer'),
    'tleft' => t('Top Left'),
    'tmid' => t('Top Middle'),
        'tright' => t('Top Right'),
    'bottom1' => t('Bottom Locations'),
    'bottom2' => t('Bottom Announcements'),
        'bottom3' => t('Bottom'),
  ),
);
