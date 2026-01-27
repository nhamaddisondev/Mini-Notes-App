<?php
use Core\App;
use Core\Database;

$header = 'Note';

$db = App::resolve('Core\Database');

// run query
$notes = $db->query('SELECT * FROM `notes`')->fetchAll();

require base_path('views/notes/index.view.php');
