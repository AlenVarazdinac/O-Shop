<?php
include_once 'config.php';
include_once 'includes/dbh-inc.php';

$userName = $_POST["register_name"];
$userEmail = $_POST["register_email"];
$userPw = $_POST["register_pw"];
$userGender = $_POST["reg_gender"];



if ($userEmail!=null && $userName!=null && $userPw!=null && $userGender!=null) {
    $command = $conn->query("INSERT INTO 
    user(user_name, user_email, user_pw, user_gender) 
    VALUES ('$userName', '$userEmail', md5('$userPw'), '$userGender')");
    header("location: " . $appPath . "public/register.php?success&email=" . $userEmail); 
} else {
    header("location: " . $appPath . "index.php");   
}

?>
