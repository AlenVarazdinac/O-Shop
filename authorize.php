<?php
include_once 'config.php';
include_once 'includes/dbh-inc.php';

if (!isset($_POST["login_email"]) || !isset($_POST["login_email"])) {
    header("location: " . $appPath . "index.php");
}
// Prepare 
$command = $conn->prepare("select * from user where user_email=:user_email and user_pw=md5(:user_pw)");
// Assign values
$command->execute(array("user_email"=>$_POST["login_email"], "user_pw"=>$_POST["login_pw"]));
$user = $command->fetch(PDO::FETCH_OBJ);

if ($user!=null) {
    // Logged in
    $_SESSION["logged"]=$user;
    header ("location: " . $appPath . "private/items/gameItems.php");
} else {
    // Not Logged 
    header ("location: " . $appPath . "public/login.php?badlogin&login_email=" . $_POST["login_email"]);
}