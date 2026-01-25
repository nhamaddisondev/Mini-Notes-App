<?php

require __DIR__ . '/bootstrap.php';
require_once BASE_PATH . 'core/Router.php';

// Make $db and $config global so controllers can access them
global $db, $config;

$router = new \Core\Router();

$registerRoutes = require base_path('routes.php');
$registerRoutes($router);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Strip the base path if your project is in a subdirectory
$basePath = '/learn-php';
if (str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath));
}
// Ensure we have at least '/'
if ($uri === '' || $uri === false) {
    $uri = '/';
}

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
