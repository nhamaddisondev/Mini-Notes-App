<?php
// $db and $config are already loaded in public/index.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = trim($_POST['body'] ?? '');

    if ($body !== '') {
        $stmt = $db->connection->prepare(
            'INSERT INTO `notes` (body) VALUES (:body)'
        );
        $stmt->execute([
            ':body' => $body,
        ]);

        header('Location: /notes');
        exit;
    }
}

$header = 'Create note';
require __DIR__ . '/../../views/notes/create.view.php';