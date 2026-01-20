<?php
use Core\Database;

global $db, $config;

$header = 'Note';

// $db and $config are already loaded in public/index.php

// run query
$notes = $db->query('SELECT * FROM `notes`')->fetchAll();

require base_path('views/notes/index.view.php');
