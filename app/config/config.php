<?php
require CONFIG_PATH . '/parameter.php';
require CONFIG_PATH . '/config_dev.php';

$services = include CONFIG_PATH . '/service.php';

$classesToBeLoaded = array_merge(
    $classesToBeLoaded, $services
);
