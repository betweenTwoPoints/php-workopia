<?php

require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;
use Framework\Session;

Session::start();

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri);
