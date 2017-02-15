<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OneSearch'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_onesearch.png',
  'theme' => 'ou_onesearch',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'search' => t('Search Bar'),
    'header' => t('OneSearch Header'),
    'books' => t('Books'),
	'articles' => t('Articles & More'),
	'websites' => t('Library Websites'),
    'guides' => t('Research Guides'),
	'shareok' => t('ShareOK'),
    'speccoll' => t('Special Collections'),
    'extra1' => t('Extra Box 1'),
	'extra2' => t('Extra Box 2'),
	'othersearch' => t('Other Searches'),
  ),
);
