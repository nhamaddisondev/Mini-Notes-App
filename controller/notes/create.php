<?php
require_once __DIR__ . '/../function.php';
$config = require __DIR__ . '/../config.php';
require_once __DIR__ . '/../Database.php';

$db = new Database($config['database']);

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
require __DIR__ . '/../views/createnote.view.php';