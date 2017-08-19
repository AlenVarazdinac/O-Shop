<?php

function loginCheck () {
    if (!isset($_SESSION["logged"])) {
        header("location: " . $GLOBALS["appPath"] . "public/login.php?norights");
        exit;
    }
}

function rightsCheck($user_rights) {
    if(!(isset($_SESSION["logged"]) && 
         $_SESSION["logged"]->user_rights===$user_rights)) {
        header("location: " . $GLOBALS["appPath"] . "index.php");
        exit;
    }
}


?>