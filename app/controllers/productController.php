<?php

require 'app/persistences/product.php';
$product = getProduct($db, $id);
var_dump($product);
$titleProduct = $product["title"];
$imageProduct = "";
$descriptionImageProduct = "blablabla";
$descriptionProduct = $product["description"];
$price = $product['price'];
include 'resources/views/product/show.php';
