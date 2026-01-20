<?php

require __DIR__ . '/../bootstrap.php';

// Make $db and $config global so controllers can access them
global $db, $config;

$router = new \Core\Router();

$registerRoutes = require base_path('routes.php');
$registerRoutes($router);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);