<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('OU More Stats'),
  'category' => t('Bootstrap'),
  'icon' => 'ou_stats.png',
  'theme' => 'ou_more_stats',
  'admin css' => '../ou-layouts-admin.css',
  'regions' => array(
    'topP' => t('top P'),
    'top1' => t('Top 1'),
    'top2' => t('Top 2'),
    'top3' => t('Top 3'),
    'top4' => t('Top 4'),
    'top5' => t('Top 5'),
    'top6' => t('Top 6'),
    'mid2' => t('Mid 2'),
    'mid3' => t('Mid 3'),
    'mid4' => t('Mid 4'),
    'mid5' => t('Mid 5'),
    'mid6' => t('Mid 6'),
    'mid7' => t('Mid 7'),
    'bot2' => t('Bottom 2'),
    'bot3' => t('Bottom 3'),
    'bot4' => t('Bottom 4'),
    'bot5' => t('Bottom 5'),
    'bot6' => t('Bottom 6'),
    'foot1' => t('Foot 1'),
    'foot2' => t('Foot 2'),
    'foot3' => t('Foot 3'),
    'foot4' => t('Foot 4'),
    'foot5' => t('Foot 5'),
  ),
);
