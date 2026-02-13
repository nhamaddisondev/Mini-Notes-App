<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errors = [];

/**
 * Email validation
 */
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please provide a valid email address.';
}

/**
 * Password validation (minimum 7 characters)
 */
if (strlen($password) < 7) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

/**
 * If validation fails, return back to form
 */
if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

/**
 * Check if user already exists
 */
$user = $db->query(
    'SELECT * FROM users WHERE email = :email',
    ['email' => $email]
)->find();

if ($user) {
    header('Location: /');
    exit;
}

/**
 * Insert user
 * NOTE: password hashing will be added later
 */
$db->query(
    'INSERT INTO users (email, password) VALUES (:email, :password)',
    [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]
);

/**
 * Login user
 */
$_SESSION['user'] = [
    'email' => $email
];

header('Location: /');
exit;
