<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Dashboard'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_dashboard.png',
  'theme' => 'ou-dashboard',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
	'header' => t('Header'),
	'topl' => t('New Contet'),
	'topm' => t('Other Tools'),
	'topr' => t('Locations & Units'),
	'main' => t('Main'),
    'sidebar' => t('Sidebar'),
    'middle' => t('New Content Header'),
	'lmiddle' => t('Drafts'),
	'rmiddle' => t('Needs Review'),
	'reviewheader' => t('Review Header'),
    'lreview' => t('Immediate Review'),
    'rreview' => t('Annual Review'),
	'bottom' => t('All My Content'),
  ),
);
