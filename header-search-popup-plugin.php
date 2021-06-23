<?php
/*
Plugin Name: Header Search Popup for Woocommerce by RMcC
Plugin URI: #
Description: A custom popup product search. Toggle it with #ModalNavbarSearch
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: header-search-popup
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('HEADER_SEARCH_POPUP_PATH')) define('HEADER_SEARCH_POPUP_PATH', plugin_dir_path( __FILE__ ));
if (!defined('HEADER_SEARCH_URL')) define('HEADER_SEARCH_URL', plugin_dir_url( __FILE__ ));

// require action functions 
require_once('inc/functions.php');

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\HeaderSearchPopup;