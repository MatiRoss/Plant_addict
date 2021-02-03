<?php
require 'bootstrap/app.php';
require 'app/persistences/product.php';
$toto=getProduct($db,$id);
var_dump($toto);
include 'resources/views/product/show.tpl';
