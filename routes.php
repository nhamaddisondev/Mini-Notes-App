<?php
// return [
//     '/'            => 'controller/index.php',
//     '/about'       => 'controller/about.php',
//     '/notes'       => 'controller/notes/index.php',
//     '/contact'     => 'controller/contact.php',
//     '/note'        => 'controller/notes/show.php',
//     '/create-note' => 'controller/notes/create.php',
// ];

return function ($router) {
    $router->get('/', 'index.php');
    $router->get('/about', 'about.php');
    $router->get('/contact', 'contact.php');
    $router->get('/notes', 'notes/index.php')->only('auth');
    $router->get('/note', 'notes/show.php')->only('auth');
    $router->get('/notes/create', 'notes/create.php')->only('auth');
    $router->get('/create-note', 'notes/create.php')->only('auth');
    $router->post('/create-note', 'notes/create.php')->only('auth');
    $router->delete('/note', 'notes/show.php')->only('auth');
    $router->get('/notes/edit', 'notes/edit.php')->only('auth');
    $router->post('/notes/update', 'notes/update.php')->only('auth');
    $router->get('/register', 'registration/create.php')->only('guest');
    $router->post('/register', 'registration/store.php')->only('guest');
    $router->get('/login', 'session/create.php')->only('guest');
    $router->post('/session', 'session/store.php')->only('guest');
    $router->delete('/session', 'session/destroy.php')->only('auth');
};