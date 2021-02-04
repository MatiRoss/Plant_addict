<?php
/**
 * Cette fonction recupère un produit
 * @param PDO $is_db
 * @param int $is_id
 * @return array
 */
function getProduct(PDO $is_db, int $is_id): array
{
    $sql = "SELECT products.title, products.description, products.vat, products.price FROM products WHERE products.id=:id";
    $sth = $is_db->prepare($sql);
    $sth->bindvalue('id', $is_id, PDO::PARAM_STR);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getAllProducts(PDO $is_db, int $is_displayed = 100) : array
{
    $sql = "SELECT * FROM products LIMIT $is_displayed";
    $sth = $is_db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function maxStock($is_db, $is_id) {
    $sql = 'SELECT products.stock FROM products WHERE products.id = :id';
    $sth = $is_db->prepare($sql);
    $sth->bindValue(":id", $is_id, PDO::PARAM_INT);
    $sth->execute();
    return $sth->fetch(PDO::FETCH_ASSOC);
}