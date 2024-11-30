<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";

$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>