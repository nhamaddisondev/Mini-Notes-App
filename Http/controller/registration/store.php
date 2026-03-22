<?php

use Core\App;
use Core\Database;
use Core\Validator;

/**
 * Handle user registration form submission.
 *
 * Validates email and password, checks for duplicate accounts,
 * hashes the password, inserts the new user into the database,
 * logs the user in, and redirects to the home page.
 */

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

// Validate the submitted form fields
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least 7 characters.';
}

// If validation fails, re-render the registration form with errors
if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

// Check if a user with this email already exists
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    // Email is already taken, redirect back with an error
    return view('registration/create.view.php', [
        'errors' => [
            'email' => 'An account with this email already exists.'
        ]
    ]);
}

// Insert the new user with a hashed password
$db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
]);

// Log the newly registered user in and redirect to home
login([
    'email' => $email
]);

header('location: /');
exit();