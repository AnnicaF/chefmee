<?php
// CONNECT TO DATABASE
$dbHost = "localhost";
$dbName = "menu";
$dbChar = "utf8";
$dbUser = "root";
$dbPass = "";
try {
    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=$dbChar",
        $dbUser, $dbPass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (Exception $ex) { exit($ex->getMessage()); }

// GET MENU ITEMS
$stmt = $pdo->prepare("SELECT * FROM `menu`");
$stmt->execute();
$items = $stmt->fetchAll();
// print_r($items);