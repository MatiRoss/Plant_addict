<?php
//Variables SANITIZING (URL)

$url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$urlIsSet = isset($url);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Dictionnaire des routes

$roads = [
    'home' => 'homeController.php',
    'product' => 'productController.php',
    '404' => '404Controller.php',
    'cart' => 'cartController.php',


];
if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!isset($roads[$action])) {
        $action = '404';
    }
    $files = $roads[$action];
} else {
    $files = $roads['home'];
}

include 'resources/views/layouts/header.php';
if ($files == $roads['404']) {
    require 'resources/views/errors/404.php';
} else {
    include 'app/controllers/' . $files;
}

include 'resources/views/layouts/footer.php';