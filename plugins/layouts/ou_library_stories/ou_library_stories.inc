<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Library Stories'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_library_stories.png',
  'theme' => 'ou-library-stories',
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
