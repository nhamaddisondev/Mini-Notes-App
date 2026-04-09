<?php

// Purpose: Middleware that redirects authenticated users away from guest-only pages.
namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}