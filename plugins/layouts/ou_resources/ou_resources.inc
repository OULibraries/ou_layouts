<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Resources'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_resources.png',
  'theme' => 'ou-resources',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'main' => t('Main'),
    'sidebar' => t('Sidebar'),
    'middle' => t('Middle Full Span'),
	'lmiddle' => t('Left Middle'),
	'rmiddle' => t('Right Middle'),
    'bottom' => t('Bottom Full Span'),
    'lbottom' => t('Left Bottom'),
    'rbottom' => t('Right Bottom'),
  ),
);
