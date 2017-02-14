<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Intranet About'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_about.png',
  'theme' => 'ou_about',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top1' => t('Welcome'),
	'top2' => t('Menu'),
    'item1' => t('Item 1'),
    'item2' => t('Item 2'),
	'item3' => t('Item 3'),
	'item4' => t('Item 4'),
	'item5' => t('Item 5'),
	'item6' => t('Item 6'),
	'mleft' => t('Middle Left'),
	'mright' => t('Middle Right'),
	'governance' => t('Governance'),
	'departments' => t('Departments'),
  ),
);
