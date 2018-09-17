<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Renegades'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_renegades.png',
  'theme' => 'ou_renegades',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top1' => t('Top Left'),
	  'top2' => t('Top Right'),
    'item1' => t('Item 1'),
    'item2' => t('Item 2'),
    'item3' => t('Item 3'),
    'item4' => t('Item 4'),
	  'item5' => t('Item 5'),
  	'item6' => t('Item 6'),
    'item7' => t('Item 7'),
  ),
);
