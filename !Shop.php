<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCEshop.css">
</head>
<body>
    <div class="wrapper">
        <!-- Header Section ito-->
        <?php include "#Navbar.php"; ?>

        <!-- Main Section ito-->
        <main>
            <section id="page-header">
                <h2>#cooloutfits</h2>
                <p>buy yours now to to be the coolest person on earth!</p>
            </section>

            <section id="product1" class="section-p1">
                <h2>Featured Merchandise</h2>
                <p>Kyusi Esports Cool Modern Designs</p>
                <div class="pro-container">
                    <div class="pro" onclick="window.location.href='products/!Product.php';">
                        <img src="qceimages/firstimage.webp" alt="">
                        <div class="des">
                            <span>Original 'to</span>
                            <h5>Pinakamaangas na Sweater sa QCU</h5>
                            <div class="star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <h4>₱5 Dalawa</h4>
                        </div>
                        <i class='bx bxs-cart-alt cartbox'></i>
                    </div>
                    <div class="pro" onclick="window.location.href='products/!Product2.php';">
                        <img src="qceimages/secimage.webp" alt="">
                        <div class="des">
                            <span>Original din 'to</span>
                            <h5>Napakaangas na ID Lace ng Kyusi Esports</h5>
                            <div class="star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <h4>₱5 Dalawa</h4>
                        </div>
                        <i class='bx bxs-cart-alt cartbox'></i>
                    </div>
                    <div class="pro" onclick="window.location.href='product/!Product.php';">
                        <img src="qceimages/thirdimage.webp" alt="">
                        <div class="des">
                            <span>Original 'to</span>
                            <h5>Pinakamaangas na Sweater sa QCU</h5>
                            <div class="star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <h4>₱5 Dalawa</h4>
                        </div>  
                        <i class='bx bxs-cart-alt cartbox'></i>
                    </div>
                    <div class="pro" onclick="window.location.href='products/!Product4.php';">
                        <img src="qceimages/fourthimage.webp" alt="">
                        <div class="des">
                            <span>Eto hindi Original</span>
                            <h5>Assorted stickers!</h5>
                            <div class="star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <h4>₱10 Dalawa</h4>
                        </div>
                        <i class='bx bxs-cart-alt cartbox'></i>
                    </div>
                    <!-- <div class="pro" onclick="window.location.href='!Product.php';">
                        <img src="qceimages/secimage.webp" alt="">
                        <div class="des">
                            <span>Original 'to</span>
                            <h5>Pinakamaangas na Sweater sa QCU</h5>
                            <div class="star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <h4>₱5 Dalawa</h4>
                        </div>
                        <i class='bx bxs-cart-alt cartbox'></i>
                    </div> -->
                    
            </section>

            <section id="newsletter" class="section-p1">
                <div class="newstext">
                    <h4>Sign up for new updates</h4>
                    <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Your email address">
                    <button class="normal">Sign up</button>
                </div>
            </section>
        </main>

    <!-- Footer Section ito-->
    <?php include "#Footer.php"; ?>

    <script src="javascript/QCE.js"></script>
</body>
</html>