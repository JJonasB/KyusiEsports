<?php
include "Conn.php";
session_start();

$dbUsername = $_SESSION['username'];
$dbproduct_name = $_POST['product_name'];
$dbproduct_type = $_POST['product_type'];
$dbquantity = $_POST['quantity'];
$dbsize = $_POST['size'];
$dbinitial_amount = $_POST['initial_amount'];

echo $dbsize;

if (empty($dbsize)) {
    $dbsize = " ";
}
if (empty($dbproduct_type)) {
    $dbproduct_type = " ";
}

$insertStmt = $conn ->prepare("INSERT INTO `cart` (`Username`, `product_name`,`product_type`, `size`, `quantity`,`initial_amount`) VALUES (?,?,?,?,?,?)");
$insertStmt ->bind_param('ssssss',$dbUsername,$dbproduct_name,$dbproduct_type,$dbsize,$dbquantity,$dbinitial_amount);
$insertStmt -> execute();


echo "<Script>
        alert(\"Item added to cart.\");
        window.location.href = '../!Cart.php';
      </Script>";

    $insertStmt->close();
    $conn->commit();
?> 