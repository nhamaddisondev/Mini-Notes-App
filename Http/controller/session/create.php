<?php

// Purpose: Renders the login page with any flashed validation errors.
use Core\Session;

view('session/create.view.php', [
    'errors' => Session::get('errors')
]);