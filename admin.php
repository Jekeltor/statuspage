<?php
require_once("config.php");

if(!isset($_SESSION['loggedin'])){
//Show login form
exit();
}

if(isset($_POST['password'])) {
    if($_POST['password'] === $config_password) {
        $_SESSION['loggedin'] = true;
    } else {
        $_SESSION['error'] = "Wrong Password.";
        header('Location: login.php');
    }
}

?>

Admin Page To Change Options and add announcements
