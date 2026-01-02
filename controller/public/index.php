<?php

const BASE_PATH = '/../';


require __DIR__ . BASE_PATH . '/router.php';

require __DIR__ . BASE_PATH . '/Database.php';


$config = require (__DIR__ . BASE_PATH . '/config.php');

$db = new Database($config);
