<?php

require_once __DIR__ . '/../../function.php';
$config = require __DIR__ . '/../../config.php';
require __DIR__ . '/../../Database.php';

$db = new Database($config['database']);

// get id from query string
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id <= 0) {
    http_response_code(404);
    die('Note not found');
}

// load that note
$statement = $db->query('SELECT * FROM `notes` WHERE id = ' . $id);
$note = $statement->fetch();

if (!$note) {
    http_response_code(404);
    die('Note not found');
}

// title for header
$header = $note['title'] ?? 'Note';

require __DIR__ . '/../../views/notes/show.view.php';