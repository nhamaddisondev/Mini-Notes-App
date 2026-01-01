<?php


require __DIR__ . '/router.php';

require __DIR__ . '/Database.php';


$config = require (__DIR__ . 'config.php');

$db = new Database($config);
