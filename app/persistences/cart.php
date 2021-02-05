<?php

require 'app/helpers/vatApply.php';

function initCart()
{
    if (!isset ($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}

function addProductCart(int $id, int $quantity)
{
       $_SESSION['cart'][$id] = $quantity;
}


function getProductById(PDO $is_db, $is_id) : array
{
    $sql =  "SELECT products.id, products.title, products.price, products.vat FROM products WHERE products.id = :id";
    $sth = $is_db->prepare($sql);
    $sth->bindValue(":id",$is_id,PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function totalProductPrice (float$is_price, float$is_vat, int $is_quantity) {
    $result = ((($is_price * $is_vat) / 100) + $is_price) * $is_quantity;
    return number_format($result, 2);
}
