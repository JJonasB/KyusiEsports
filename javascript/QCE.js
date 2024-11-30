// For responsive navbar on mobile version
document.addEventListener('DOMContentLoaded', () => {
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x'); 
        navbar.classList.toggle('open'); 

        if (navbar.classList.contains('open')) {
            navbar.style.right = '0';
        } else {
            navbar.style.right = '-100%'; 
        }
    };
});

function toggleMenu() {
    document.getElementById("dropdownMenu").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.three-dots')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

// Define the functions for viewing account, purchases, and cart
function viewAccount() {
    console.log("Viewing account details.");
}

function viewPurchases() {
    console.log("Viewing purchases.");
}

function viewCart() {
    console.log("Viewing cart.");
}

// For image slider
const slides = document.querySelectorAll(".slides img");
let slideIndex = 0;
let intervalId = null;

document.addEventListener("DOMContentLoaded", initializeSlider);

function initializeSlider() {
    if (slides.length > 0) {
        slides[slideIndex].classList.add("displaySlide");
        intervalId = setInterval(nextSlide, 5000);
    }
}

function showSlide(index) {
    if (index >= slides.length) {
        slideIndex = 0;
    } else if (index < 0) {
        slideIndex = slides.length - 1;
    }

    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });
    slides[slideIndex].classList.add("displaySlide");
}

function prevSlide() {
    clearInterval(intervalId);
    slideIndex--;
    showSlide(slideIndex);
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

// Get the modal
const modal = document.getElementById("loginModal");

// Get the button that opens the modal
var loginButton = document.querySelector(".user");

// Get the <span> element that closes the modal
var closeModal = document.getElementById("closeModal");

// When the user clicks on the button, open the modal
loginButton.onclick = function() {
    modal.style.display = "block";  
    document.body.classList.add('blur'); 
}

// When the user clicks on <span> (x), close the modal
closeModal.onclick = function() {
    modal.style.display = "none"; 
    document.body.classList.remove('blur'); 
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none"; // Hide the modal
        document.body.classList.remove('blur'); 
    }
}

// Handle form submission
document.getElementById("loginForm"). onsubmit = function(event) {
    event.preventDefault(); 
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Here you would typically send the login data to your server
    console.log("Username:", username);
    console.log("Password:", password);

    // Close the modal after submission
    modal.style.display = "none";
}

// Sample registered users (for demonstration purposes)
const registeredUsers = [
    { username: "john_doe", email: "john@example.com", password: "yourpassword123" }
];

// Handle login form submission
function handleLogin(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const notification = document.getElementById('notification');

    const user = registeredUsers.find(user => 
        (user.username === username || user.email === username) && user.password === password
    );

    if (!user) {
        notification.innerText = "No registered account found. Please sign up.";
        notification.style.display = "block";
    } else {
        notification.style.display = "none";
        alert("Login successful!"); 
        
        // Show user options
        document.getElementById('userOptions').classList.remove('hidden');
        
        // Optionally, close the login modal here
        document.getElementById('loginModal').style.display = 'none';
    }
}

// Handle sign-up form submission
function handleSignUp(event) {
    event.preventDefault();
    const newUsername = document.getElementById('newUsername').value;
    const newEmail = document.getElementById('newEmail').value;
    const newPassword = document.getElementById('newPassword').value;
    const signUpNotification = document.getElementById('signUpNotification');

    // Check if the username or email already exists
    const existingUser  = registeredUsers.find(user => 
        user.username === newUsername || user.email === newEmail
    );

    if (existingUser ) {
        signUpNotification.innerText = "Username or email already exists.";
        signUpNotification.style.display = "block";
    } else {
        // Add the new user to the registered users array
        registeredUsers.push({ username: newUsername, email: newEmail, password: newPassword });
        signUpNotification.innerText = "Sign up successful! You can now log in.";
        signUpNotification.style.display = "block";
        // Optionally close the sign-up modal after a successful sign up
        document.getElementById('signUpModal').style.display = 'none';
    }
}

// Show the sign-up modal when the link is clicked
document.getElementById('showSignUp').addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'none';
    document.getElementById('signUpModal').style.display = 'block';
});

// Close modals when the close button is clicked
document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'none';
});

document.getElementById('closeSignUpModal').addEventListener('click', function() {
    document.getElementById('signUpModal').style.display = 'none';
});

// Sample registered users (for demonstration purposes)
constregisteredUsers = [];

// Handle login form submission
function handleLogin(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const notification = document.getElementById('notification');

    const user = registeredUsers.find(user => 
        (user.username === username || user.email === username) && user.password === password
    );

    if (!user) {
        notification.innerText = "No registered account found. Please sign up.";
        notification.style.display = "block";
    } else {
        notification.style.display = "none";
        alert("Login successful!"); 
        
        // Optionally, close the login modal here
        document.getElementById('loginModal').style.display = 'none';
    }
}

// Handle sign-up form submission
function handleSignUp(event) {
    event.preventDefault();
    
    const newUsername = document.getElementById('newUsername').value;
    const firstName = document.getElementById('fname').value;
    const middleName = document.getElementById('mname').value;
    const lastName = document.getElementById('lname').value;
    const studentNumber = document.getElementById('num').value;
    const dateOfBirth = document.getElementById('bday').value;
    const course = document.getElementById('course').value;
    const newEmail = document.getElementById('newEmail').value;
    const newPassword = document.getElementById('pass1').value; 
    const confirmPassword = document.getElementById('pass2').value;
    const signUpNotification = document.getElementById('signUpNotification');

    // Check if the username or email already exists
    const existingUser   = registeredUsers.find(user => 
        user.username === newUsername || user.email === newEmail
    );

    if (existingUser ) {
        signUpNotification.innerText = "Username or email already exists.";
        signUpNotification.style.display = "block";
    } else if (newPassword !== confirmPassword) {
        signUpNotification.innerText = "Passwords do not match.";
        signUpNotification.style.display = "block";
    } else {
        // Add the new user to the registered users array
        registeredUsers.push({
            username: newUsername,
            firstName: firstName,
            middleName: middleName,
            lastName: lastName,
            studentNumber: studentNumber,
            dateOfBirth: dateOfBirth,
            course: course,
            email: newEmail,
            password: newPassword 
        });
        
        signUpNotification.innerText = "Sign up successful! You can now log in.";
        signUpNotification.style.display = "block";
        
        // Optionally close the sign-up modal after a successful sign up
        document.getElementById('signUpModal').style.display = 'none';
    }
}

// Show the sign-up modal when the link is clicked
document.getElementById('showSignUp').addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'none';
    document.getElementById('signUpModal').style.display = 'block';
});

// Close modals when the close button is clicked
document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'none';
});

document.getElementById('closeSignUpModal').addEventListener('click', function() {
    document.getElementById('signUpModal').style.display = 'none';
});

function viewAccount() {
    console.log("Viewing account details.");
}

function viewPurchases() {
    console.log("Viewing purchases.");
}

function viewCart() {
    console.log("Viewing cart.");
} 

//limits the student number to 6 characters, and adds a dash to the student number :)
function formatStudentNumber(event) {
    const input = event.target;
    let value = input.value.replace(/\D/g, ''); // Remove non-digit characters

    // Limit to 7 characters
    if (value.length > 6) {
        value = value.slice(0, 6);
    }

    // Add dash after the first two digits
    if (value.length > 2) {
        value = value.slice(0, 2) + '-' + value.slice(2);
    }

    input.value = value;
}
//does the same as the function above but only limits it to 11 numbers without the dash, and this is for contact number.
function formatContactNumber(event){
    const input = event.target;
    let value = input.value.replace(/\D/g, '');
    if(value.length > 11){
        value = value.slice(0, 11);
    }
    input.value = value;
}