<?php

// Purpose: Logs out the current user session and redirects to home.
/**
 * Handle user logout.
 *
 * Destroys the current session, clears the session cookie,
 * and redirects the user back to the home page.
 */

logout();

header('location: /');
exit();
