<?php

require_once 'router.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$router = new router();
$router->get('/', 'form');
$router->post('/create','create');
$router->get('/list','list');
$router->delete('/delete','delete');
$router->post('/edit','edit');
$router->put('/update','update');
$router->routes($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

