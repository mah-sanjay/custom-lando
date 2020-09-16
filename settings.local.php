<?php
/**
 * @file
 * Local settings for Lando dev env.
 *
 * Make sure you include this at the very bottom of the settings.php or
 * settings.local.php file so that it can override the settings as required
 * to make your site work on your lando env.
 */

/**
 * Prepare a LANDO_INFO constant.
 *
 * Contains info which you can see using the "lando info" command. Use the
 * values in this constant to connect to the right Lando services.
 */
if (!defined('LANDO_INFO') && isset($_ENV['LANDO_INFO'])) {
  define('LANDO_INFO', json_decode($_ENV['LANDO_INFO'], TRUE));
}

// When using lando.
if (defined('LANDO_INFO')) {
  // One of "internal" or "external". Usually, "internal".
  define('LANDO_DATABASE', 'internal');

  $databases['default']['default'] = array(
    'database' => LANDO_INFO['database']['creds']['database'],
    'username' => LANDO_INFO['database']['creds']['user'], // Root user is root.
    'password' => LANDO_INFO['database']['creds']['password'], // Root password is ''.
    'prefix' => '',
    'host' => LANDO_INFO['database'][LANDO_DATABASE . '_connection']['host'],
    'port' => LANDO_INFO['database'][LANDO_DATABASE . '_connection']['port'],
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  );
} else {
  $databases['default']['default'] = array(
    'database' => getenv('MYSQL_DATABASE'),
    'username' => getenv('MYSQL_USER'),
    'password' => getenv('MYSQL_PASSWORD'),
    'prefix' => '',
    'host' => getenv('MYSQL_HOST'),
    'port' => '3306',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  );
}



// Reduce how aggressive D8 cache is.
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/development.services.yml';

// Enable twig debug.
$settings['twig_debug'] = TRUE;

// Disable aggregation for CSS and JS.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Default cache bins.
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';

//$settings['hash_salt'] = 'vztAcwwMM36zq4Y0JIncgtqIWzbg-ruIDExzdQ-ZK4zOGcUcElAAyor61UK8DD5UFuj1VuByBg';
