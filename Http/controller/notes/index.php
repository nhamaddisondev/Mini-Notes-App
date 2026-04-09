<?php

// Purpose: Retrieves notes from storage and renders the notes list page.
use Core\App;
use Core\Database;
$_SESSION['name'] = "Panha";

$header = 'Note';

$db = App::resolve('Core\Database');

// run query
$notes = $db->query('SELECT * FROM `notes`')->get();

require base_path('views/notes/index.view.php');
