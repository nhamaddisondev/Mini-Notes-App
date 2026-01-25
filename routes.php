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
    $router->get('/notes', 'controller/notes/index.php');
    $router->get('/note', 'controller/notes/show.php');
    $router->get('/notes/create', 'controller/notes/create.php');
    $router->get('/create-note', 'controller/notes/create.php');
    $router->post('/create-note', 'controller/notes/create.php');
};