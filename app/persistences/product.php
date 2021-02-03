<?php
function getProduct($is_db,$is_id) {
    $sql="SELECT products.title, products.description, products.vat, products.price FROM products WHERE products.id=:id";
    $sth=$is_db->prepare($sql);
    $sth->bindvalue('id', $is_id, PDO::PARAM_STR);
    $sth->execute();
    $result=$sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}