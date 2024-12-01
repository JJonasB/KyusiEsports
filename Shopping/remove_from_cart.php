<?php
session_start();

// Remove product from cart
if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    unset($_SESSION['cart'][$productId]);
}

header("Location: cart.php");
exit();
?>
