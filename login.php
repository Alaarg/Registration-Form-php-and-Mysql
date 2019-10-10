<?php
session_start();
$message = "";
if (count($_POST) > 0) {
    $con = new mysqli('localhost', 'root', '', 'users') or die('Unable To connect');
    // include_once 'database.php';
    $username =  $_POST["username"];
    $password  = $_POST["pass"];

    $result = $con->query("SELECT * FROM users WHERE username= '$username' AND pass = '$password'");
    $row  = mysqli_fetch_array($result);
    //var_dump($row);

    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
    } else {
        $message = "Invalid Username or Password!";
        echo $message;
    }
}
if (isset($_SESSION["id"])) {
 header("Location:home.php");
}
