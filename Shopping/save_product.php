<?php
require 'db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get product data from the form
    $name = trim($_POST['name']);
    $price = (float) $_POST['price'];

    // Validate inputs
    if (!empty($name) && $price > 0) {
        try {
            // Insert product into the database
            $stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
            $stmt->execute([':name' => $name, ':price' => $price]);

            echo "Product added successfully!<br>";
        } catch (PDOException $e) {
            echo "Error adding product: " . $e->getMessage();
        }
    } else {
        echo "Invalid product details. Please try again.<br>";
    }
}

echo '<a href="add_product.php">Add Another Product</a> | <a href="index.php">Back to Products</a>';
?>
