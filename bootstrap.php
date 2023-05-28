<?php

const BASE_DIR = __DIR__;

define("START_BOOTSTRAP", microtime(true));

require BASE_DIR . '/app/Common.php';
helper('template');

if (is_file($autoloader = __DIR__ . '/vendor/autoload.php')) {
    include $autoloader;
}


define("TIME_BOOTSTRAP", microtime(true) - START_BOOTSTRAP);

