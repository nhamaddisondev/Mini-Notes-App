<?php

use Core\Session;

session_start();
const BASE_PATH = __DIR__ . '/../'; 

$router->route($uri,$method);

Session::unflash();