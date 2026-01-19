<?php
// return [
//     '/'            => 'controller/index.php',
//     '/about'       => 'controller/about.php',
//     '/notes'       => 'controller/notes/index.php',
//     '/contact'     => 'controller/contact.php',
//     '/note'        => 'controller/notes/show.php',
//     '/create-note' => 'controller/notes/create.php',
// ];
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');