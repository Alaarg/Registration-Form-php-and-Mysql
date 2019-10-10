<?php
include_once 'database.php';
if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users  (username,pass,email)
	 VALUES ('$username','$pass','$email')";
    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
