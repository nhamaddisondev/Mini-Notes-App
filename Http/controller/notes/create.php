<?php

// Purpose: Handles note creation form display and note insert on POST requests.
use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $body = trim($_POST['body'] ?? '');

    if ($body !== '' && $title !== '') {
        $stmt = $db->connection->prepare(
            'INSERT INTO `notes` (title, body) VALUES (:title, :body)'
        );
        $stmt->execute([
            ':title' => $title,
            ':body' => $body,
        ]);

        header('Location: /notes');
        exit;
    }
}

$header = 'Create note';

view('notes/create.view.php', [
    'header' => $header
]);