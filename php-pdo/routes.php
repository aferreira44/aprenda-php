<?php

// GET

$router->get('php-pdo', 'controllers/index.php');

$router->get('php-pdo/about', 'controllers/about.php');

$router->get('php-pdo/about/culture', 'controllers/about-culture.php');

// POST

$router->post('php-pdo/contact', 'controllers/contact.php');

$router->post('php-pdo/names', 'controllers/add-name.php');
