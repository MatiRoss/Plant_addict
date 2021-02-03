<?php
require 'app/helpers/vatApply.php';
require 'app/persistences/product.php';
$lastProducts = 6;
$AllProducts = getAllProducts($db, $lastProducts);

require 'resources/views/home.php';