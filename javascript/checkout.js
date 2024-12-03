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

document.getElementById('checkoutBtn').addEventListener('click', function() {
    window.location.href = 'CheckoutDone.html'; 
});