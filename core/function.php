<?php

namespace Core\Database;

if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
}

function urlIs($value)
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $basePath = '/learn-php';
    if (str_starts_with($uri, $basePath)) {
        $uri = substr($uri, strlen($basePath));
    }
    if ($uri === '' || $uri === false) {
        $uri = '/';
    }

    return $uri === $value;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}