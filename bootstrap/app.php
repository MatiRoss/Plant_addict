<?php
require 'config/database.php';

//---FONCTION DEBUG---//
require 'app/helpers/debug.php';
require 'app/helpers/vatApply.php';
require 'app/helpers/errors.php';

require 'app/persistences/cart.php';

session_start();
initCart();
$cartProducts = totalCart($db);