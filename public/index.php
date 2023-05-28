<?php

use Appkit\Core\App;
use Appkit\Core\Load;
use Appkit\Middleware\ResourceMiddleware;
use Appkit\Middleware\RouterMiddleware;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
header_remove("X-Powered-By");
define("START_TIMER", microtime(true));

require_once dirname(__FILE__, 2) . '/bootstrap.php';

// Path to the front controller (this file)
const DS = DIRECTORY_SEPARATOR;
const FCPATH = __DIR__;


$setup = Load::config('config.php', true);
$app = new App($setup);

$app->add(ResourceMiddleware::class);
$app->add(RouterMiddleware::class);

$app->run();
