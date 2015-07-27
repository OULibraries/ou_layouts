<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Profile'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_profile.png',
  'theme' => 'ou-profile',
  'admin css' => '../ou-layouts-admin.css',
  'regions'   => array(
    'top'     => t('Top'),
    'lmiddle' => t('Middle Left'),
    'rmiddle' => t('Middle Right'),
	'middle' => t('Middle'),
    'bottom1' => t('Bottom Left'),
    'bottom2' => t('Bottom Middle'),
    'bottom3' => t('Bottom Right'),
  ),
);
