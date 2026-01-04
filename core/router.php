<?php
// get path part of URL
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If your project is in /learn-php, strip that base path:
$basePath = '/learn-php';
if (str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath));
}
if ($uri === '' || $uri === false) {
    $uri = '/';
}

// load routes (returns an array)
$routes = require __DIR__ . '/../routes.php';

function abort($code = 404){
    http_response_code($code);
    require __DIR__. '/../views/404.php';
    die();
}

function routesToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// call the router
routesToController($uri, $routes);
