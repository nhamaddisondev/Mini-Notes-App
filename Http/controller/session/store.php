<?php

use Core\App;
use Core\Database;
use Core\Validator;

/**
 * Handle user login form submission.
 *
 * Validates email and password, looks up the user by email,
 * verifies the password against the stored hash, logs the user in,
 * and redirects to the home page.
 */

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

// Validate the submitted form fields
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

// If validation fails, re-render the login form with errors
if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

// Attempt to find the user by email
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

// Verify the password if a matching user is found
if ($user) {
    if (password_verify($password, $user['password'])) {
        // Credentials are valid — log the user in and redirect
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}

// No match — redirect back with a generic error message
return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);
