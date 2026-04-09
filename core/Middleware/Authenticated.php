<?php

// Purpose: Middleware that redirects guests to login when authentication is required.
namespace Core\Middleware;

class Authenticated
{
    /**
     * Ensure the user is logged in.
     * Redirects guests to the login page.
     */
    public function handle()
    {
        if (!($_SESSION['user'] ?? false)) {
            header('location: /login');
            exit();
        }
    }
}