<?php

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

function getProductById(PDO $is_db, $is_id): array
{
    $sql = "SELECT products.id, products.title, products.price, products.vat FROM products WHERE products.id = :id";
    $sth = $is_db->prepare($sql);
    $sth->bindValue(":id", $is_id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function totalProductPrice(float $is_price, float $is_vat, int $is_quantity)
{
    $result = ((($is_price * $is_vat) / 100) + $is_price) * $is_quantity;
    return $result;
}

function totalCartPrice(PDO $is_db): array
{
    $allProducts = array();
    $totalPriceCard = 0;
    $totalqt = 0;
    foreach ($_SESSION['cart'] as $id => $qt) {
        $selectedProduct = getProductById($is_db, $id);
        $pricettc = vatApply($selectedProduct['price'], $selectedProduct['vat']);
        $totalPriceQteTtc = totalProductPrice($selectedProduct['price'], $selectedProduct['vat'], $qt);
        $totalPriceCard += $totalPriceQteTtc;
        $totalqt += $qt;
        $allProducts[$id] = [
            "infoProduct" => $selectedProduct,
            "quantity" => $qt,
            "priceTtc" => $pricettc,
            "totalPriceQteTtc" => $totalPriceQteTtc,
        ];
    }
    $allProducts['totalCardPrice'] = $totalPriceCard;
    $allProducts['totalQuantity'] = $totalqt;
    return $allProducts;
}