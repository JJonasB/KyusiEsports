<?php
require "Conn.php";
session_start();

$dbUser = $_POST["username"];
$dbPass = $_POST["password"];

$sql = "SELECT * From registration WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$dbUser, $dbUser);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    if (isset($user['username'])) {
        echo "User  Found!: " . htmlspecialchars($user['username']) . "<br>";
    } else {
        echo "User  Found! (but no username available)<br>";
    }

    if ($dbPass == $user['password']) {
        echo "Password Match!";
        $_SESSION['username'] = htmlspecialchars($user['Username']);
        header("Location: index.php");
        exit;
    } else {
        echo "Password does not match.";
    }
} else {
    echo "No User Found.";
}
?>
