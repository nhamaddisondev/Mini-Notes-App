<?php


require __DIR__ . '/router.php';

require 'Database.php';


$config = require ('config.php');

$db = new Database($config);
