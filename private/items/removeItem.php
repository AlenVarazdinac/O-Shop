<?php
include_once '../../config.php';
include_once '../../includes/dbh-inc.php';


if (isset($_GET["itemname"])) {
    $command = $conn->prepare ("DELETE FROM item WHERE item_name=:item_name");
    $command->execute(array("item_name"=>$_GET["itemname"]));
    header("location: ../../index.php");
}