<?php

$db = require 'bootstrap.php';

$tasks = $db->selectAll('todos');

require 'index.view.php';