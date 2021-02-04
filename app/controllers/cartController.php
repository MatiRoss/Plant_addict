<?php
    require 'resources/views/cart/index.php';

    $productPost = [
        $id_product = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING),
        $qty_product = trim(filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING)),
    ];

    var_dump($productPost);