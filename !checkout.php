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
</head>
<body>
    <div class="wrapper">
        <!-- Header Section ito-->
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
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href=""><i class='bx bxs-x-circle'></i></a></td>
                        <td><img src="qceimages/firstimage.webp"></td>
                        <td>Next level na Sweater sa Kyusi Esports</td>
                        <td>₱116</td>
                        <td><input type="number" min="0" value="1"></td>
                        <td>₱116</td>
                    </tr>
                    <tr>
                        <td><a href=""><i class='bx bxs-x-circle' ></i></a></td>
                        <td><img src="qceimages/secimage.webp"></td>
                        <td>Next level na Sweater sa Kyusi Esports</td>
                        <td>₱199</td>
                        <td><input type="number" min="0" value="1"></td>
                        <td>₱199</td>
                    </tr>
                    <tr>
                        <td><a href=""><i class='bx bxs-x-circle' ></i></a></td>
                        <td><img src="qceimages/thirdimage.webp"></td>
                        <td>Next level na Sweater sa Kyusi Esports</td>
                        <td>₱120</td>
                        <td><input type="number" min="0" value="1"></td>
                        <td>₱120</td>
                    </tr>
                </tbody>
            </table>
            </section>

            <section id="cart-add" class="section-p1">
                <div id="codepon">
                    <h3>Apply Code Discount</h3>
                <div>
                    <input type="text" placeholder="Enter your Code Discount Here">
                    <buton class="normalbtn">Apply</buton>
                    </div>
                </div>

                <div id="subtotal">
                    <h3>Cart Totals</h3>
                    <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$435</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$435</strong></td>
                    </tr>
                </table>
                <button class="normalbtn">Proceed to Checkout</button>
                </div>
            </section>
        </main>

           <!-- Footer Section ito-->
            <?php include "#footer.php"?>

    <script src="javascript/checkout.js"></script>
</body>
</html>