<?php

// Project root absolute path with trailing slash
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);
}

require_once BASE_PATH . 'core/function.php';
require_once BASE_PATH . 'core/Database.php';

$config = require BASE_PATH . 'config.php';

// Support either ['database' => [...]] or direct config array
$dbConfig = $config['database'] ?? $config;

$db = new Database($dbConfig);
