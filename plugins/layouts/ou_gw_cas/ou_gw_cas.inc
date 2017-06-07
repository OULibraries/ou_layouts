<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU GW CAS'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_gw_cas.png',
  'theme' => 'ou-gw-cas',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
	'mleft' => t('Middle Left'),
	'mmiddle' => t('Middle Middle'),
    'mright' => t('Middle Right'),
	'mid-bottom-left' => t('Middle Bottom Left'),
    'mid-bottom-right' => t('Middle Bottom Right'),
	'login-left' => t('Login Left'),
	'login-right' => t('Login Right'),
    'bottom' => t('Bottom'),
  ),
);
