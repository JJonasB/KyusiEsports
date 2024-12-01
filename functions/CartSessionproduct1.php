<?php
include "Conn.php";


$dbUsername = $_SESSION["Username"];
$dbproduct_name = $_POST['product_name'];
$dbquantity = $_POST['quantity'];
$dbsize = $_POST['size'];
$dbinitial_amount = $_POST['initial_amount'];



$insertStmt = $conn ->prepare("INSERT INTO `cart` (`Username`, `product_name`, `quantity`, `size`,`initial_amount`) VALUES (?,?,?,?,?)");
$insertStmt ->bind_param('sssss',$dbUsername,$dbproduct_name,$dbquantity,$dbsize,$dbinitial_amount);
$insertStmt -> execute();


echo "<Script>
        altert(\"Registered Successfully, You can now Log In.\");
        window.location.href = '../!Shop.php';
        </Script>";

    $insertStmt->close();
    $conn->commit();
?>