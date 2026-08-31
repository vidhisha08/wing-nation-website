<?php
$host = "localhost";
$user = "DATABASE_USERNAME";     
$pass = "DATABASE_PASSWORD";         
$db   = "wingnation";
$port = 3307;   

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

