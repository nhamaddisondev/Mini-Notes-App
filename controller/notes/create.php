<?php

use Core\Database;

global $db, $config;

// $db and $config are already loaded in public/index.php

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
require __DIR__ . '/../../views/notes/create.view.php';