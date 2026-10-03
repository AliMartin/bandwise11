<?php

$settings['update_free_access'] = FALSE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';

$settings['trusted_host_patterns'] = [
  '^bandwise\.co\.uk$',
  '^.+\.bandwise\.co\.uk$',
  '^bandwise11\.ddev\.site$',
  '^.+\.bandwise11\.ddev\.site$',
];

$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';
$settings['enable_html5_validation'] = FALSE;
