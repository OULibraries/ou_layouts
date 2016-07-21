<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Intranet Docs'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_intranet_docs.png',
  'theme' => 'ou-intranet-docs',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'search1' =>t('Search Left'),
    'search2' =>t('Search Middle'),
    'search3' =>t('Search Right'),
    'body' => t('Body'),
    'section1' =>t('Section 1'),
    'section2' =>t('Section 2'),
    'section3' =>t('Section 3'),
	  'sidebar' => t('Sidebar'),
	  'bottom' => t('Bottom'),

  ),
);
