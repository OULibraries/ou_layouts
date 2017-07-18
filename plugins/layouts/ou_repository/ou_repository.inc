<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Repository'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_repository.png',
  'theme' => 'ou-repository',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
	'header' => t('Header'),
	'left' => t('Top Left'),
	'right' => t('Top Right'),
	'middle1' => t('Middle Left'),
    'middle2' => t('Middle'),
    'middle3' => t('Middle Right'),
	'bottom' => t('Bottom'),
  ),
);
