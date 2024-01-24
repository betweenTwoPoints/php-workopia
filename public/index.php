<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;

// spl_autoload_register(function ($className) {
//     $path = basePath('Framework/' . $className . '.php');
//     if (file_exists($path)) {
//         require $path;
//     }
// });

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri);
