<?php
/*Route*/
$router = new \Bramus\Router\Router();

$router->setNamespace('Controller');
$router->get('/', 'HomeController@index');
$router->get('/login', 'AuthController@login');

$router->run();