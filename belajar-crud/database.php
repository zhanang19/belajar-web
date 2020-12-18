<?php
$serverName = "localhost";
$dbName = "belajar_web";
$username = "root";
$password = "";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

if (! $conn) {
    die("Connection failed!");
}
?>