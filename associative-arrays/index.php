<?php

$person = [
    'age' => 28,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'André';

unset($person['age']);

var_dump($person);



require 'index.view.php';