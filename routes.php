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
    $router->get('/', 'controller/index.php');
    $router->get('/about', 'controller/about.php');
    $router->get('/contact', 'controller/contact.php');
    $router->get('/notes', 'controller/notes/index.php')->only('auth');
    $router->get('/note', 'controller/notes/show.php')->only('auth');
    $router->get('/notes/create', 'controller/notes/create.php')->only('auth');
    $router->get('/create-note', 'controller/notes/create.php')->only('auth');
    $router->post('/create-note', 'controller/notes/create.php')->only('auth');
    $router->delete('/note', 'controller/notes/show.php')->only('auth');
    $router->get('/notes/edit', 'controller/notes/edit.php')->only('auth');
    $router->post('/notes/update', 'controller/notes/update.php')->only('auth');
    $router->get('/register', 'controller/registration/create.php')->only('guest');
    $router->post('/register', 'controller/registration/store.php')->only('guest');
    $router->get('/login', 'controller/session/create.php')->only('guest');
    $router->post('/session', 'controller/session/store.php')->only('guest');
    $router->delete('/session', 'controller/session/destroy.php')->only('auth');
};