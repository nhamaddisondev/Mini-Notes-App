<?php
use Core\Database;

require_once __DIR__ . '/../../bootstrap.php';

$header = 'Note';

// $db and $config are already loaded in public/index.php

// run query
$notes = $db->query('SELECT * FROM `notes`')->fetchAll();

require __DIR__ . '/../../views/notes/index.view.php';
