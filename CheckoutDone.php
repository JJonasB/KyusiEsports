<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Done - Kyusi Esports</title>
    <link rel="stylesheet" href="css/CheckoutDone.css">
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php include("#navbar.php"); ?>

        <main>
        <center><h1>Thank You for Your Purchase!</h1></center>
            <section class="confirmation">
                
                <h2>Your Order Has Been Placed Successfully!</h2>
                <p>Order Number: <strong id="orderNumber">#123456</strong></p>
                <p>We appreciate your business and hope you enjoy your purchase!</p>
            </section>

            <section class="order-summary">
                <h3>Order Summary</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody id="orderItems">
                        <!-- Order items will be injected here by JavaScript -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td><strong id="totalAmount">₱0</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </section>

            <section class="actions">
                <a href="!shop.php" class="normalbtn">Continue Shopping</a>
                <a href="!Cart.php" class="normalbtn">View Your Orders</a>
            </section>
        </main>

    </div>
    <?php include("#footer.php"); ?>

    <script src="javascript/CheckoutDone.js"></script>
</body>
</html>