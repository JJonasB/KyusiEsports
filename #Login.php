<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<!-- Login Popup -->
<div class="modal" id="loginModal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <h1><center>Login</center></h1>
                <form method= "POST" action="LoginSession.php">
                    <label for="username">Username or Email Address:</label>
                    <input type="text" id="username" name="username" placeholder="Juan1 or Juan@example.com" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"  placeholder="Yourpassword123" required>
                    
                    <button type="submit" class="login btn-primary">Login</button>
                </form>
                <p>Don't have an account? <a href="#" id="showSignUp">Create an account</a></p>
                <div id="notification" style="color: red; display: none;">
                </div>
            </div>
</div>

<!-- Register -->
<div class="modal" id="signUpModal" style="display: none;">
            <div class="modal-content">
                <span class="close" id="closeSignUpModal">&times;</span>
                <h1> <center> Create an Account</center></h1>
                <div class="scrollable-form">
                    <form id="signUpForm" method="POST" action="RegisterSession.php">
                        <label for="newUsername">Username:</label>
                        <input name="username" type="text" id="Username" placeholder="Enter your username" required>
                        
                        <label>Student Name:</label>
                        <div class="name-container">
                            <input name="firstName" type="text" id="fname" placeholder="First Name" required>
                            <input name="middleName" type="text" id="mname" placeholder="Middle Name">
                            <input name="lastName" type="text" id="lname" placeholder="Last Name" required>
                        </div>

                        <label for="num">Student Number:</label>
                        <input name="studentNumber" type="text" id="num" placeholder="Student Number - 24-0000" required oninput="formatStudentNumber(event)">

                        <label for="bday">Date of Birth:</label>
                        <input name="dateOfBirth" type="date" id="bday" required>

                        <label for="course">Course:</label>
                        <input name="course" type="text" id="course" placeholder="Course Name - BSIT" required>

                        <label for="section">Section:</label>
                        <input name="section" type="text" id="section" placeholder="Section Name - 1E" required>

                        <label for="course">Address:</label>
                        <input name="address" type="text" id="address" placeholder="Enter your address" required>

                        <label for="course">Contact:</label>
                        <input name="contact" type="text" id="contact" placeholder="09*********" required oninput="formatContactNumber(event)">

                        <label for="email">Email Address:</label>
                        <input name="email" type="email" id="Email" placeholder="Email Address" required>

                        <label for="password">Password:</label>
                        <input name="password" type="password" id="password" placeholder="Password" required>

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
</body>
</html>