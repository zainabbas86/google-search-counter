<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

defined('APPLICATION_PATH') ||
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/app'));

defined('CONFIG_PATH') ||
define('CONFIG_PATH', APPLICATION_PATH . '/config');

defined('LIB_PATH') ||
define('LIB_PATH', APPLICATION_PATH . '/lib');

defined('SRC_PATH') ||
define('SRC_PATH', realpath(dirname(__FILE__) . '/src'));

defined('TESTS_PATH') ||
define('TESTS_PATH', realpath(dirname(__FILE__) . '/tests'));

$classesToBeLoaded = [];

require_once CONFIG_PATH . '/config.php';
require_once APPLICATION_PATH . '/autoload.php';

new Controller\DefaultController();

echo "Config Loaded Successfully";
