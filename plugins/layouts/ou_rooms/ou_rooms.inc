<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU Rooms'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_rooms.png',
  'theme' => 'ou_rooms',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'rooms_pic' => t('Room Image'),
    'rooms_description' => t('Room Description'),
    'main_content' => t('Main Content'),
	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'tleft' => t('Middle Left'),
    'tright' => t('Middle Right'),
	'bottom' => t('Bottom'),
	'footerl' => t('Footer Left'),
	'footerm' => t('Footer Middle'),
	'footerr' => t('Footer Right'),
  ),
);
