<?php

// Purpose: Loads a single note and renders the note edit form.
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view("notes/edit.view.php", [
    'header' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);