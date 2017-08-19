<?php

switch ($_SERVER["HTTP_HOST"]) {
    case 'localhost':
        $appPath = '/O-Shop/';
        $dbHost = 'localhost';
        $dbBase = 'oshopdb';
        $dbUsername = 'varazdinac';
        $dbPassword = 'test1234';   
        break;
    case 'vote4music.byethost7.com':
        $appPath = '/O-Shop/';
        $dbHost = 'sql108.byethost7.com';
        $dbBase = 'b7_20112054_oshopdb';
        $dbUsername = 'b7_20112054';
        $dbPassword = 'p76qxry3';   
        break;
}


$conn = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbBase,
                $dbUsername, $dbPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->exec("SET CHARACTER SET utf8");
$conn->exec("SET NAMES utf8");

?>
