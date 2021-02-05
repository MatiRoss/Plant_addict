<?php

require 'app/persistences/cart.php';

$productPost = [
    $id_product = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING),
    $qty_product = trim(filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING)),
];

if ($id_product != '') {
    addProductcart($id_product, $qty_product);
}

$selectedProduct = getProductById($db, $id_product);

require 'resources/views/cart/index.php';