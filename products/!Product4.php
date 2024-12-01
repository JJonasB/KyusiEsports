<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="../css/QCEshop.css">
</head>
<body>
    <div class="wrapper">
    <?php include "../#Navbar.php"; ?>

        <!-- Main Section ito-->
        <main>
            <section id="prodetails" class="section-p1">
                <div class="single-pro-image">
                    <img src="../qceimages/firstimage.webp" width="100%" id="MainImg">
                
                    <div class="small-img-group">
                        <div class ="small-img-col">
                            <img src="../qceimages/firstimage.webp" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="../qceimages/secimage.webp" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="../qceimages/thirdimage.webp" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="../qceimages/fourthimage.webp" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                 
                <div class="single-pro-details">
                    <form id="formProduct1" action ="../functions/CartSessionproduct1.php" method="POST">                   
                    <h6>Kyusi Esports / Stickers</h6>
                    <input name="product_name" type="text" id="product_name" value="Kyusi Esports/ Stickers" class="hidden">
                    <h4>Assorted Stickers</h4>
                    <h2>₱10</h2>
                    <input name="initial_amount" type="text" id="price" value="10" class="hidden">
                    <select name="size" id="size">
                        <option value="">Select Sticker</option>
                        <option value="nana">Nana</option>
                        <option value="lucas1">Lucas-Yeah</option>
                        <option value="lucas2">Lucas-Die</option>
                        <option value="lucas3">Lucas-Angy</option>
                        <option value="lucas4">Lucas-Shock</option>
                        <option value="lucas5">Lucas-Laugh</option>
                        <option value="cici1">Cici-Shock</option>
                        <option value="cici2">Cici-Laugh</option>
                        <option value="cici3">Cici-Stop</option>
                        <option value="cici4">Cici-Angy</option>
                        <option value="cici5">Cici-Fear</option>
                        <option value="cici6">Cici-cri</option>
                        <option value="Omen">Omen</option>
                        <option value="Jett">Jett</option>
                        <option value="clove">Clove</option>
                        <option value="lars">Lars</option>
                        <option value="kazuya">Kazuya</option>
                        <option value="alisa">Alisa</option>
                    </select>
                    <input name="quantity" type="text" id="quantity" value="">
                    <div class="popup-container">
                    <button type= "submit" class="normalbtn">Add To Cart</button>
                    <div class="popup" id="popup">
                        <h2>Thank You!</h2>
                        <p>It has been added to your cart! Add more.</p>
                        <button type="button" onclick="closePopup()">Okay</button>
                    </div>
                    </form> 
                    </div>
                    <!-- <button class="normalbtn" id="btnbuy">Buy</button> -->
                    <h4>Product Details</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto molestiae amet eos, animi eveniet nesciunt, fuga vel distinctio similique itaque eligendi non nulla. Facere dignissimos sunt explicabo, aut amet illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis facere dolor illo inventore perferendis libero dolore rerum eveniet. Libero reprehenderit fugiat suscipit animi consequatur incidunt odio possimus! Sed, optio placeat.</span>
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
    <?php include "../#Footer.php"; ?>

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