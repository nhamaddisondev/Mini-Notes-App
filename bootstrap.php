<?php

require_once __DIR__ . '/core/function.php';
require_once __DIR__ . '/core/Container.php';
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Database.php';

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});

App::setContainer($container);