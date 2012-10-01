<?php

/**
 * Do not edit this file. If you need to do any framework bootstrapping you should
 * do it in the bootstrap.php file that lives within the application directory.
 */

// Aliasing rules
use Nerd\Autoloader;

define('DS', DIRECTORY_SEPARATOR);
define('LIBRARY_PATH', dirname(dirname(__DIR__)));
define('VENDOR_PATH', dirname(LIBRARY_PATH).'/vendor');
define('DOCROOT', dirname(LIBRARY_PATH).'/public');

/**
 * Get and register the Nerd autoloader.
 */
require LIBRARY_PATH.'/nerd/classes/autoloader.php';
Autoloader::register();