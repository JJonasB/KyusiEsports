<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/KyusiEsports/css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?php session_start();?>
</head>
    <title>Document</title>
</head>
<body>
    <!-- Header Section ito-->
    <header>
            <a href="/KyusiEsports/index.php" class="logo">
                <img src="/KyusiEsports/qceimages/KYUSI-E.png" class="kyusilogo" alt="Kyusi Logo">
                <span>Kyusi Esports</span>
            </a>

            <ul class="navbar">
                <li><a href="/KyusiEsports/index.php" >Home</a></li>
                <li><a href="/KyusiEsports/!News.php">News</a></li>
                <li><a href="/KyusiEsports/!Shop.php">Shop</a></li>
                <li><a href="/KyusiEsports/!AboutUs.php">About Us</a></li>
            </ul>

            <div class="header-main">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='#' class='user'> <i class='ri-user-fill'> </i>Log in</a>";
                    echo "<div class='bx bx-menu' id='menu-icon'>";
                } else {
                    echo "<a href='/KyusiEsports/!checkout.php' class='cartcon'> <i class='ri-shopping-cart-2-fill'> </i> Cart</a>";
                    echo "<a href='#' class=''> <i class='ri-user-fill'> </i>". htmlspecialchars($_SESSION['username'])."</a>";
                    echo "<a href='/KyusiEsports/functions/Log-out.php' class=''> </i>Logout</a>";
                    echo "<div class='bx bx-menu' id='menu-icon'>";
                }
                ?>
                </div>
            </div>
        </header>
    
    <?php include "#Login.php";?>
</body>
</html>