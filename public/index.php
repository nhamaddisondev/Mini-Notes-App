<?php

const BASE_PATH = '/../';

require __DIR__ . BASE_PATH . 'core/function.php';

require __DIR__ . BASE_PATH . 'core/router.php';

require __DIR__ . BASE_PATH . 'core/Database.php';


$config = require(__DIR__ . BASE_PATH . '/config.php');

$db = new Database($config);
