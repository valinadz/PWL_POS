<?php

<<<<<<< HEAD
use Illuminate\Foundation\Application;
=======
>>>>>>> 5d53c0df12e5cd437ea24fe360af394196482388
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
<<<<<<< HEAD
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
=======
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
>>>>>>> 5d53c0df12e5cd437ea24fe360af394196482388
