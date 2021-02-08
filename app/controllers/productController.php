<?php
require 'app/persistences/product.php';

//Variables SANITIZING (URL)
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$product = getProduct($db, $id);

/* @todo a virer */
$titleProduct = $product['title'];
$descriptionImageProduct = "blablabla";
$descriptionProduct = $product["description"];
$price = $product['price'];
$vat = $product['vat'];
$maxStock = $product['stock'];

require 'resources/views/product/show.php';


