<?php
session_start();

// Update product quantity
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $productId = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    if ($quantity > 0) {
        $_SESSION['cart'][$productId] = $quantity;
    } else {
        unset($_SESSION['cart'][$productId]);
    }
}

header("Location: cart.php");
exit;
?>
