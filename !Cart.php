<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/checkout.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        button[type="submit"] {
            width: 60px;
            padding: 10px 15px;
        }
        
        input[type="number"] {
            width: 70px;
            padding: 10px 5px 10px 15px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Header Section -->
        <?php include "#Navbar.php" ?>
        <main>
            <section id="cartco" class="section-p1">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Remove</td>
                            <td>Image</td>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td></td>
                            <td></td>
                            <td>Subtotal</td>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- <tr>
                        <td><a href=""><i class='bx bxs-x-circle' ></i></a></td>
                        <td><img src="qceimages/thirdimage.webp"></td>
                        <td>Next level na Sweater sa Kyusi Esports</td>
                        <td>₱120</td>
                        <td><input type="number" min="0" value="1"></td>
                        <td>₱120</td>
                    </tr> -->
                        
                    <?php
                    include "functions/Conn.php";
                    $username = $_SESSION['username']; // Get the username from session

                    // Handle form submission for item deletion
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_item'])) {
                        $delete_id = $_POST['delete_id']; // Get the ID of the item to delete

                        // Prepare the SQL statement to delete the item
                        $delete_stmt = $conn->prepare("DELETE FROM cart WHERE ID = ? AND username = ?");
                        $delete_stmt->bind_param("is", $delete_id, $username);
                        $delete_stmt->execute();
                        $delete_stmt->close();

                        // Optionally, refresh the page to show updated cart
                        echo "<script type='text/javascript'>
                                window.location.href = '/KyusiEsports/!Cart.php';
                            </script>";
                        exit();
                    }

                    $stmt = $conn->prepare("SELECT * FROM cart WHERE username = ?");
                    $stmt->bind_param("s", $username); // Bind the parameter
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Initialize subtotal
                    $cartSubtotal = 0;

                    while ($row = $result->fetch_assoc()) {
                        $subtotal = $row['initial_amount'] * $row['quantity'];
                        $cartSubtotal += $subtotal; // Add to the cart subtotal

                        echo "<tr>";
                        
                        // Delete form
                        echo "<td>
                                <form method='POST' action=''>
                                    <input type='hidden' name='delete_id' value='" . htmlspecialchars($row['ID']) . "'>
                                    <button type='submit' name=' delete_item' style='border: none; background: none; cursor: pointer;'>
                                        <i class='bx bxs-x-circle'></i>
                                    </button>
                                </form>
                            </td>"; 
                        
                        echo "<td><img src='qceimages/firstimage.webp'></td>"; 
                        echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                        echo "<td>₱" . htmlspecialchars($row['initial_amount']) . "</td>"; 

                        echo "<form method='POST' action=''>";
                        echo "<td><input type='number' name='quantity' min='0' value='" . htmlspecialchars($row['quantity']) . "'></td>";
                        echo "<td><input type='hidden' name='id' value='" . htmlspecialchars($row['ID']) . "'></td>"; 
                        echo "<td><button type='submit' name='update_quantity'>Update</button></td>"; 
                        echo "<td>₱" . number_format($subtotal, 2) . "</td>"; // Display item subtotal
                        echo "</form>";
                        echo "</tr>";
                    }

                    $stmt->close();
                    ?>
                    </tbody>
                </table>
            </section>

            <section id="cart-add" class="section-p1">
                <div id="codepon">
                    <h3>Apply Code Discount</h3>
                    <div>
                        <input type="text" placeholder="Enter your Code Discount Here">
                        <button class="normalbtn">Apply</button>
                    </div>
                </div>

 <div id="subtotal">
                    <h3>Cart Totals</h3>
                    <table>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>₱<?php echo number_format($cartSubtotal, 2); ?></td> 
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>₱<?php echo number_format($cartSubtotal, 2); ?></strong></td>
                        </tr>
                    </table>
                    <button class="normalbtn">Proceed to Checkout</button>
                </div>
            </section>
        </main>

        <!-- Footer Section -->
        <?php include "#footer.php" ?>

        <script src="javascript/checkout.js"></script>
    </div>
</body>
</html>