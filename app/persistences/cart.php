<?php

function initCart()
{
    if (!isset ($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}

function addProductCart($id, $quantity)
{
       $_SESSION['cart'][$id] = $quantity;
}


