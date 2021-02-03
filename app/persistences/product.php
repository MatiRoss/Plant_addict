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