<?php

/**
 * Handle user logout.
 *
 * Destroys the current session, clears the session cookie,
 * and redirects the user back to the home page.
 */

logout();

header('location: /');
exit();
