<?php

// GET - PagesController

$router->get('php-pdo', 'PagesController@home');
$router->get('php-pdo/about', 'PagesController@about');
$router->get('php-pdo/contact', 'PagesController@contact');

// GET - UsersController

$router->get('php-pdo/users', 'UsersController@index');

// POST - UsersController

$router->post('php-pdo/users', 'UsersController@store');
