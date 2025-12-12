<?php

$header = 'Note';

// always build paths relative to this file
$config = require __DIR__ . '/../config.php';
require_once __DIR__ . '/../function.php';
require __DIR__ . '/../Database.php';

// create DB
$db = new Database($config['database']);

// run query
$notes = $db->query('SELECT * FROM `notes`')->fetchAll();

require __DIR__ . '/../views/notes.view.php';
