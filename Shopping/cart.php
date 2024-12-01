<?php
session_start();
require 'db.php';

$total = 0;

// Fetch cart products with details
$cart = $_SESSION['cart'] ?? [];
$products = [];
if ($cart) {
    $ids = implode(',', array_keys($cart));
    $stmt = $pdo->query("SELECT * FROM products WHERE id IN ($ids)");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <?php if ($cart): ?>
        <table border="1">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <?php
                $quantity = $cart[$product['id']];
                $subtotal = $product['price'] * $quantity;
                $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td>$<?php echo number_format($product['price'], 2); ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td>$<?php echo number_format($subtotal, 2); ?></td>
                    <td>
                        <form action="update_cart.php" method="post" style="display: inline;">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <input type="number" name="quantity" value="<?php echo $quantity; ?>" min="0">
                            <button type="submit">Update</button>
                        </form>
                        <a href="remove_from_cart.php?product_id=<?php echo $product['id']; ?>">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><strong>Total: $<?php echo number_format($total, 2); ?></strong></p>
        <a href="index.php">Continue Shopping</a>
    <?php else: ?>
        <p>Your cart is empty. <a href="index.php">Go back to shop</a></p>
    <?php endif; ?>
</body>
</html>
