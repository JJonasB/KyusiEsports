<?php
include "Conn.php";
session_start();

$dbUser = $_POST["username"];
$dbPass = $_POST["password"];

$sql = "SELECT * From registration WHERE Username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$dbUser);
$stmt->execute();
$result = $stmt->get_result();
$suser = $result->fetch_assoc();

if ($user) {
    echo "User Found!: " . $user['Username'] . "<br>";
    if ($dbPass == $user['password']) {
        echo "Password Match!";
        $_SESSION['username'] = $dbUser;
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Password does not match.";
    }
} else {
    echo "No User Found.";
}