<?php
include "Conn.php";
session_start();

$dbUsername = $_SESSION['username'];
$dbproduct_name = $_POST['product_name'];
$dbquantity = $_POST['quantity'];
$dbsize = $_POST['size'];
$dbinitial_amount = $_POST['initial_amount'];



$insertStmt = $conn ->prepare("INSERT INTO `cart` (`Username`, `product_name`, `quantity`, `size`,`initial_amount`) VALUES (?,?,?,?,?)");
$insertStmt ->bind_param('sssss',$dbUsername,$dbproduct_name,$dbquantity,$dbsize,$dbinitial_amount);
$insertStmt -> execute();


echo "<Script>
        alert(\"Item added to cart.\");
        window.location.href = '../!Cart.php';
      </Script>";

    $insertStmt->close();
    $conn->commit();
?> 