<?php

use JoeFallon\Autoloader;

// Define the include paths.
define('BASE_PATH', realpath(dirname(__FILE__).'/'));
define('LIB_PATH',  BASE_PATH.'/lib');
define('VEND_PATH', BASE_PATH.'/vendor');

// Set the application include paths for autoloading.
set_include_path(get_include_path().':'.LIB_PATH.':'.BASE_PATH);

// Require the Composer autoloader.
require(VEND_PATH.'/autoload.php');

// Initialize Joe's Autoloader.
Autoloader::registerAutoLoad();