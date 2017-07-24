<?php

include_once '../../config.php';
include_once '../../includes/dbh-inc.php'; 

$itemName = $_POST["item_name"];
$itemPrice = $_POST["item_price"];
$itemType = $_POST["item_type"];

try {
    $command = $conn->query("INSERT INTO item(item_name, item_price, item_type) 
    VALUES ('$itemName', '$itemPrice', '$itemType')");
    header("location: " . $appPath . "private/items/createItem.php");        
} catch (PDOException $e) {
    echo $e->getMessage();
}
