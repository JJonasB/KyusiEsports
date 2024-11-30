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
    <?php include "#Navbar.php"; ?>

        <!-- Main Section ito-->
        <main>
            <section id="prodetails" class="section-p1">
                <div class="single-pro-image">
                    <img src="qceimages/firstimage.webp" width="100%" id="MainImg">
                
                    <div class="small-img-group">
                        <div class ="small-img-col">
                            <img src="qceimages/firstimage.webp" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="qceimages/secimage.webp" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="qceimages/thirdimage.webp" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="qceimages/fourthimage.webp" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                 
                <div class="single-pro-details">
                    <h6>Kyusi Esports / Sweater</h6>
                    <h4>Kyusi Esports's Fashion Sweaters</h4>
                    <h2>₱100</h2>
                    <select>
                        <option>Select Size</option>
                        <option>XL</option>
                        <option>XXL</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                    <input type="number" value="1">
                    <div class="popup-container">
                    <button type= "submit" class="normalbtn" onclick="openPopup()">Add To Cart</button>
                    <div class="popup" id="popup">
                        <h2>Thank You!</h2>
                        <p>It has been added to your cart! Add more.</p>
                        <button type="button" onclick="closePopup()">Okay</button>
                    </div>
                    </div>
                    <button class="normalbtn" id="btnbuy">Buy</button>
                    <h4>Product Details</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto molestiae amet eos, animi eveniet nesciunt, fuga vel distinctio similique itaque eligendi non nulla. Facere dignissimos sunt explicabo, aut amet illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis facere dolor illo inventore perferendis libero dolore rerum eveniet. Libero reprehenderit fugiat suscipit animi consequatur incidunt odio possimus! Sed, optio placeat.</span>
                </div>
            </section>

            <section id="product1" class="section-p1">
                <h2>Featured Merchandise</h2>
                <p>Kyusi Esports Cool Modern Designs</p>
                <div class="pro-container">
                    <div class="pro">
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
                    <div class="pro">
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
                    </div>
                    <div class="pro">
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
                    <div class="pro">
                        <img src="qceimages/fourthimage.webp" alt="">
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
                </div>
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
        
    <!-- Footer -->
    <?php include "#Footer.php"; ?>

    <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            event.stopPropagation();
            popup.classList.remove("open-popup");
        }

        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }

        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }

        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }

        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }

    </script>

    <script defer src="javascript/QCE.js"></script>
</body>
</html>