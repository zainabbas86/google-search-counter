<?php

// Load Everything from Library

// foreach(glob(LIB_PATH . "/core/*.php") as $filename)
// {
//     include_once $filename;
// }

function lcwords($string) {
    return implode(DIRECTORY_SEPARATOR,array_map('lcfirst', explode(DIRECTORY_SEPARATOR, $string)));
}

spl_autoload_register(
    function($className) {
    	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
        if(file_exists(APPLICATION_PATH . '/' . strtolower($className) . '.php')) {
            include_once APPLICATION_PATH . '/' . strtolower($className) . '.php';
        } else if (file_exists(SRC_PATH . '/' . lcwords($className) . '.php')) {
            include_once SRC_PATH . '/' . lcwords($className) . '.php';
        }
    }
);
