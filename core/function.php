<?php

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

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = 403)
{
    if (!$condition) {
        abort($status);
    }
}

function login($user){
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout(){

    $_SESSION = [];
    session_destroy();

    $params = 
        session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}