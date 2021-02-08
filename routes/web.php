<?php

//--DICTIONNAIRE DES ROUTES--//
$roads = [
    'home' => 'homeController.php',
    'product' => 'productController.php',
    '404' => '404Controller.php',
    'cart' => 'cartController.php',
];

if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!isset($roads[$action])) {
        error404();
    }
    $files = $roads[$action];
} else {
    $files = $roads['home'];
}

require 'app/controllers/' . $files;