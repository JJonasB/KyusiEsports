<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?php session_start(); ?>
</head>
<body>
    <div class="wrapper">
        <!-- Header Section ito-->
        <header>
            <a href="index.php" class="logo">
                <img src="qceimages/KYUSI-E.png" class="kyusilogo" alt="Kyusi Logo">
                <span>Kyusi Esports</span>
            </a>

            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="QCEnews.php">News</a></li>
                <li><a href="QCEFAQ.php">FAQ</a></li>
                <li><a href="QCEmembership.php">Membership</a></li>
                <li><a href="QCesports.php">Esports</a></li>
                <li><a href="QCEshop.php">Shop</a></li>
            </ul>

            <div class="header-main">
                <?php if (!isset($_SESSION['username'])) { 
                    echo "<a href='#' class='cartcon'> <i class='ri-shopping-cart-2-fill'> </i> Cart</a>";
                    echo "<a href='#' class='user'><i class='ri-user-fill'></i>Login</a>";
                } else {
                    echo "<a href='#' class='cartcon'> <i class='ri-shopping-cart-2-fill'> </i> Cart</a>";
                    echo "<a href='#' class=''><i class='ri-user-fill'></i>Log Out</a>";
                    echo "<div class='menu'>";
                    echo "<div class='three-dots' onclick='toggleMenu()'>⋮</div>";
                } ?>
                
                    <div class="dropdown-content" id="dropdownMenu">
                        <a href="#" onclick="viewAccount()">View Account</a>
                        <a href="#" onclick="viewPurchases()">View Purchases</a>
                    </div>
                </div>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <!-- <div class="modal" id="loginModal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <h1><center>Login</center></h1>
                <form id="loginForm" onsubmit="return handleLogin(event)">
                    <label for="username">Username or Email Address:</label>
                    <input type="text" id="username" name="username" placeholder="Juan1 or Juan@example.com" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"  placeholder="Yourpassword123" required>
                    
                    <button type="submit">Login</button>
                </form>
                <p>Don't have an account? <a href="#" id="showSignUp">Create an account</a></p>
                <div id="notification" style="color: red; display: none;"></div>
            </div>
        </div> -->

        
        <!-- Sign Up Ito -->
        <div class="modal" id="signUpModal" style="display: none;">
            <div class="modal-content">
                <span class="close" id="closeSignUpModal">&times;</span>
                <h1> <center> Create an Account</center></h1>
                <div class="scrollable-form">
                    <form id="signUpForm" onsubmit="return handleSignUp(event)">
                        <label for="newUsername">Username:</label>
                        <input name="username" type="text" id="newUsername" placeholder="Enter your username" required>
                        
                        <label>Student Name:</label>
                        <div class="name-container">
                            <input name="firstName" type="text" id="fname" placeholder="First Name" required>
                            <input name="middleName" type="text" id="mname" placeholder="Middle Name">
                            <input name="lastName" type="text" id="lname" placeholder="Last Name" required>
                        </div>

                        <label for="num">Student Number:</label>
                        <input name="studentNumber" type="number" id="num" placeholder="Student Number - 24-0000" required>

                        <label for="bday">Date of Birth:</label>
                        <input name="dateOfBirth" type="date" id="bday" required>

                        <label for="course">Course:</label>
                        <input name="course" type="text" id="course" placeholder="Course Name - BSIT" required>

                        <label for="email">Email Address:</label>
                        <input name="email" type="email" id="newEmail" placeholder="Email Address" required>

                        <label for="pass1">Password:</label>
                        <input name="password" type="password" id="pass1" placeholder="Password" required>

                        <label for="pass2">Confirm Password:</label>
                        <input type="password" id="pass2" placeholder="Confirm Password" required>

                        <div class="checkbox-label">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">I agree to the terms and conditions.</label>
                        </div>
                        <input type="submit" value="Register">
                    </form>
                    <div id="signUpNotification" style="color: green; display: none;"></div>
                </div>
            </div>
        </div>

        <!-- User Options Section -->
            <div id="userOptions" class="hidden">
                <h2>Welcome!</h2>
                <button onclick="viewAccount()">My Account</button>
                <button onclick="viewPurchases()">My Purchases</button>
                <button onclick="viewCart()">Add to Cart</button>
            </div>

        <!-- View/Edit Account Modal -->
<div class="modal" id="viewAccountModal" style="display: none;">
    <div class="modal-content">
        <span class="close" id="closeViewAccountModal">&times;</span>
        <h1><center>View/Edit Account</center></h1>
        <form id="viewAccountForm">
            <label for="viewUsername">Username:</label>
            <input type="text" id="viewUsername" placeholder="Username" readonly>

            <label>Student Name:</label>
            <div class="name-container">
                <input type="text" id="viewFirstName" placeholder="First Name" required>
                <input type="text" id="viewMiddleName" placeholder="Middle Name">
                <input type="text" id="viewLastName" placeholder="Last Name" required>
            </div>

            <label for="viewNum">Student Number:</label>
            <input type="text" id="viewStudentNumber" placeholder="Student Number - 24-0000" required>

            <label for="viewBday">Date of Birth:</label>
            <input type="date" id="viewDateOfBirth" required>

            <label for="viewCourse">Course:</label>
            <input type="text" id="viewCourse" placeholder="Course Name - BSIT" required>

            <label for="viewEmail">Email Address:</label>
            <input type="email" id="viewEmail" placeholder="Email Address" required>

            <label for="viewPassword">Password:</label>
            <input type="password" id="viewPassword" placeholder="Password" required>

            <input type="submit" value="Save Changes">
        </form>
    </div>
</div> 
        
    <script src="css/test/header.js"></script>
</body>
</html>
