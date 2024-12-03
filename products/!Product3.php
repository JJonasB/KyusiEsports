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
                    <img src="../qceimages/ShopDisplays/Pin.png" width="100%" id="MainImg">
                
                    <div class="small-img-group">
                        <div class ="small-img-col">
                            <img src="" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="" width="100%" class="small-img">
                        </div>
                        <div class ="small-img-col">
                            <img src="" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                 
                <div class="single-pro-details">
                    <form id="formProduct1" action ="../functions/CartSessionproduct1.php" method="POST">                   
                    <h6>Custom made / Valorant Pins</h6>
                    <input name="product_name" type="text" id="product_name" value="Valorant Pins" class="hidden">
                    <h4>Custom made Valorant Pins!!</h4>
                    <h2>₱35</h2>
                    <input name="initial_amount" type="text" id="price" value="35" class="hidden">
                    <select name="product_type" id="product_type">
                        <option value="">Select Button</option>
                        <option value="Clove_>:3_pin"> Clove >:3 pin </option>
                        <option value="Cypher_pin"> Cypher pin </option>
                        <option value="Chamber">Chamber pin </option>
                        <option value="Sage_peace"> Sage peace pin </option>
                        <option value="Yoru_eat">Yoru eating pin </option>
                        <option value="Jett_sad">Jett sad pin </option>
                        <option value="Sage_cake">Sage holding cake pin </option>
                        <option value="Skye">Skye holding hound pin </option>
                        <option value="Viper_Omen">Viper holding omen </option>
                        <option value="Clove_please">Clove please pin </option>
                        <option value="Gekko_relieved">Gekko relieved pin </option>
                        <option value="Omen">Omen pin </option>
                        <option value="Fade">Fade pin </option>
                        <option value="Clove_pixelated">Clove pixelated pin </option>
                        <option value="Gekko_pixelated">Gekko pixelated pin </option>
                        <option value="Phoenix_pixelated">Phoenix pixelated pin </option>
                        <option value="Sage_pixelated">Sage pixelated pin </option>
                        <option value="Yoru_pixelated">Yoru pixelated pin </option>
                        <option value="Wanwan_Hmp">Wanwan Hmp! pin </option>
                        <option value="Wanwan_Laugh">Wanwan Laugh pin </option>
                        <option value="Wanwan_InLove">Wanwan In Love pin </option>
                        <option value="Wanwan_Waah">Wanwan Waaaah! pin </option>
                        <option value="Wanwan_Wave">Wanwan Wave pin </option>
                        <option value="Zilong">Zilong Pin </option>
                        <option value="KongMing">Kong Ming pin </option>
                        <option value="Diaochan">Diaochan Pin</option>
                        <option value="Biron">Biron Pin </option>
                        <option value="HanXin_Dead">Han Xin Dead Pin </option>
                        <option value="HanXin_Like">Han Xin Like Pin </option>
                        <option value="Xiao Qiao">Xiao Qiao Pin </option>
                        <option value="Ming">Ming Pin </option>
                        <option value="LadySun">Lady Sun Pin </option>
                        <option value="Allesio">Allesio pin </option>
                        <option value="Arli">Arli Pin </option>
                        <option value="SunBin">Sun Bin Pin </option>
                        <option value="HanXin">Han Xin Pin </option>
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