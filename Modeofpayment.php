<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method</title>
    <link rel="stylesheet" href="css/Modeofpayment.css">
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>
    
	<center>
        <?php
            include ("#navbar.php");
        ?>
    </center>
        <main>
            <center>
            <section class="payment-method">
                <h1>Payout</h1> 
                <br>
                <h2>Payment Method</h2>
                
                <div class="payment-options">
                    <label>
                        <input type="radio" style="outline: none; width: 15px; height: 15px;" name="payment" value="gcash" checked>
                        GCash
                    </label>

                    <label>
                        <input type="radio" style="outline: none; width: 15px; height: 15px;" name="payment" value="cash-on-delivery">
                        Cash on Delivery
                    </label>
                </div>

                <div class="payment-details">
                    <h3>Payment Verification</h3>
                    
                    <!-- GCash Payment Details -->
                    <div id="gcash-details" class="payment-info">

                        <label for="gcashReference">Reference Number:</label>
                        <input type="text"style="border-radius: 10px; text-align: center; border: none; outline: none; width: 250px; height: 25px;" id="gcashReference" name="gcashReference" required placeholder="Enter Reference Number">
                    </div>

                    <!-- Cash on Delivery Details -->
                    <div id="cod-details" class="payment-info" style="display:none;">
                        <label for="deliveryAddress">Address:</label>
                        <input type="text" style="border-radius: 10px; text-align: center; border: none; outline: none; width: 250px; height: 25px;" id="deliveryAddress" name="deliveryAddress" required placeholder="Enter address">

                        <label for="deliveryTime">Contact Number:</label>
                        <input type="text" style="border-radius: 10px; text-align: center; border: none; outline: none; width: 250px; height: 25px;" id="deliveryTime" name="deliveryTime" required placeholder="09XXXXXXXXX">
                    </div>
                </div>

                <a class="normalbtn" href="CheckoutDone.php">Confirm Payment Method</a>
            </section>
        </main>
    </div>

    <?php include ("#footer.php"); ?>
    <script src="javascript/Modeofpayment.js"></script>
	</center>	
</body>
</html>
