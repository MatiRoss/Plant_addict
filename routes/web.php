<?php
//Variables SANITIZING (URL)
session_start();

$url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$urlIsSet = isset($url);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

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
        $action = '404';
    }
    $files = $roads[$action];
} else {
    $files = $roads['home'];
}

//--CALCUL ET AFFICHAGE DU PANIER--//

$productPost = [
    $id_product = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING),
    $qty_product = trim(filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING)),
];

require 'app/persistences/cart.php';
if ($id_product != '') {
    addProductcart($id_product, $qty_product);
}
$cartProducts = totalCartPrice($db);

//--DEBUT DES INCLUDES & ROUTES--//

include 'resources/views/layouts/header.php';
if ($files == $roads['404']) {
    require 'resources/views/errors/404.php';
} else {
    include 'app/controllers/' . $files;
}
include 'resources/views/layouts/footer.php';