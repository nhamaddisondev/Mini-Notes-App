<?php

// Purpose: Loads one note, supports note deletion, and renders note details.
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// get id from query string
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if ($id <= 0) {
    http_response_code(404);
    die('Note not found');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '') === 'DELETE') {
    // delete the note
    $stmt = $db->connection->prepare(
        'DELETE FROM `notes` WHERE id = :id'
    );
    $stmt->execute([
        ':id' => $id,
    ]);

    header('Location: /notes');
    exit;
}

// load that note
$note = $db->query('SELECT * FROM `notes` WHERE id = :id', [
    'id' => $id
])->find();

if (!$note) {
    http_response_code(404);
    die('Note not found');
}

// title for header
$header = $note['title'] ?? 'Note';

view('notes/show.view.php', [
    'header' => $header,
    'note' => $note
]);