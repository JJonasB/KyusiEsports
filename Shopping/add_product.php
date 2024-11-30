<?php
require 'db.php'; // Include the database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add a New Product</h1>
    <form action="save_product.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br><br>
        <button type="submit">Add Product</button>
    </form>
    <br>
    <a href="index.php">Back to Products</a>
</body>
</html>
