<?php

$productPost = [
    $id_product = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING),
    $qty_product = trim(filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING)),
];

if ($id_product != '') {
    addProductcart($id_product, $qty_product);
}

//--VIder le panier--//
if (isset($_POST['reset'])) {
    unset($_SESSION['cart']);
}

if(isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    unset($_SESSION['cart'][$id]);
}
$cartProducts = totalCart($db);

require 'resources/views/cart/cartview.php';