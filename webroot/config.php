<?php
/**
 * Config-file for grimes. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define grimes paths.
 *
 */
define('GRIMES_INSTALL_PATH', __DIR__ . '/..');
define('GRIMES_THEME_PATH', GRIMES_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(GRIMES_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the grimes variable.
 *
 */
$grimes = array();


/**
 * Site wide settings.
 *
 */
$grimes['lang']         = 'sv';
$grimes['title_append'] = ' | grimes en webbtemplate';

/**
 * Theme related settings.
 *
 */
$grimes['stylesheet'] = 'css/style.css';
$grimes['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$grimes['modernizr'] = 'js/modernizr.js';
$grimes['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$grimes['jquery'] = null; // To disable jQuery
$grimes['javascript_include'] = array();
//$grimes['javascript_include'] = array('js/main.js'); // To add extra javascript files

// Add js/main.js for inklusion
$grimes['javascript_include'][] = 'js/main.js';
$grimes['javascript_include'][] = 'js/other.js';

/**
 * Google analytics.
 *
 */
$grimes['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

/**
 * Theme related settings.
 *
 */
//$anax['stylesheet'] = 'css/style.css';
$grimes['stylesheets'] = array('css/style.css');
