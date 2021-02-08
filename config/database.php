<?php
require 'config_DB.php';
try {
    $db = new PDO("mysql:host=localhost;dbname=shop;charset=utf8mb4",
        $user,
        $pass,
        // PDO::ATTR_ERRMODE enables exceptions for errors.  This is optional but can be handy.
        // PDO::ATTR_PERSISTENT disables persistent connections, which can cause concurrency issues in certain cases.  See "Gotchas".
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false
        )
    );
//AUTREMENT, TU CAPTURES VERS L'ERREUR
} catch (PDOException $e) {
    echo "Échec lors de la connexion : " . $e->getMessage();
}