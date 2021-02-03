<?php

require 'app/persistences/product.php';
$product = getProduct($db, $id);
var_dump($product);
include 'resources/views/product/show.php';
