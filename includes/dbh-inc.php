<?php

$dbHost = 'localhost';
$dbBase = 'oshopdb';
$dbUsername = 'varazdinac';
$dbPassword = 'sifra123';

$conn = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbBase,
                $dbUsername, $dbPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->exec("SET CHARACTER SET utf8");
$conn->exec("SET NAMES utf8");

?>
