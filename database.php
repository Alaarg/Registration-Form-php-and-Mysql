<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = "users";

// Create connection

$conn = new mysqli($host, $username, $password, $dbName);

// Check connection

if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
// echo "conction working";


// <?php
// $servername='localhost';
// $username='root';
// $password='';
// $dbname = "crud";
// $conn=mysqli_connect($servername,$username,$password,"$dbname");
// if(!$conn){
//    die('Could not Connect My Sql:' .mysql_error());
// }
// 
