// Function to show/hide payment details based on selected payment method
function togglePaymentDetails() {
    const gcashDetails = document.getElementById('gcash-details');
    const codDetails = document.getElementById('cod-details');

    const paymentOptions = document.querySelectorAll('input[name="payment"]');

    // Add event listener to each payment option
    paymentOptions.forEach(option => {
        option.addEventListener('change', () => {
            // Default to hide both sections
            gcashDetails.style.display = 'none';
            codDetails.style.display = 'none';

            // Show the relevant section based on the selected payment option
            if (option.value === 'gcash') {
                gcashDetails.style.display = 'block'; 
            } else if (option.value === 'cash-on-delivery') {
                codDetails.style.display = 'block'; 
            }
        });
    });
}

// Initialize the toggle function
togglePaymentDetails();
