<?php
require 'app/helpers/vatApply.php';
require 'app/persistences/product.php';
$product = getProduct($db, $id);
$titleProduct = $product["title"];
$descriptionImageProduct = "blablabla";
$descriptionProduct = $product["description"];
$price = $product['price'];
$vat = $product['vat'];

$maxStock = maxStock($db, $id);
debug($maxStock);
include 'resources/views/product/show.php';


