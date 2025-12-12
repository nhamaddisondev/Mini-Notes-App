<?php

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
