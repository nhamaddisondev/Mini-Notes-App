<?php
// if (!defined('BASE_PATH')) {
//     define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// }

// // get path part of URL
// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// // If your project is in /learn-php, strip that base path:
// $basePath = '/learn-php';
// if (str_starts_with($uri, $basePath)) {
//     $uri = substr($uri, strlen($basePath));
// }
// if ($uri === '' || $uri === false) {
//     $uri = '/';
// }

// // load routes (returns an array)
// $routes = require BASE_PATH . 'routes.php';

// function abort($code = 404)
// {
//     http_response_code($code);
//     require BASE_PATH . 'views/404.php';
//     die();
// }

// function routesToController($uri, $routes)
// {
//     global $db, $config;

//     if (array_key_exists($uri, $routes)) {
//         require BASE_PATH . $routes[$uri];
//     } else {
//         abort();
//     }
// }

// // call the router
// routesToController($uri, $routes);

class Router
{

    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);

    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);

    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    protected function abort($code = 404)
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }
}