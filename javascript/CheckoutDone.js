// Example order data
const orderData = [
    { product: "Next level na Sweater sa Kyusi Esports", price: 116, quantity: 1 },
    { product: "Next level na Sweater sa Kyusi Esports", price: 199, quantity: 1 },
    { product: "Next level na Sweater sa Kyusi Esports", price: 120, quantity: 1 }
];

// Function to populate the order summary
function populateOrderSummary() {
    const orderItemsContainer = document.getElementById('orderItems');
    let total = 0;

    orderData.forEach(item => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.product}</td>
            <td>₱${item.price}</td>
            <td>${item.quantity}</td>
            <td>₱${subtotal}</td>
        `;
        orderItemsContainer.appendChild(row);
    });

    // Update total amount
    document.getElementById('totalAmount').innerText = `₱${total}`;
}

// Generate a random order number for demonstration
function generateOrderNumber() {
    const orderNumber = Math.floor(Math.random() * 1000000);
    document.getElementById('orderNumber').innerText = `#${orderNumber}`;
}

// Initialize the page
function init() {
    generateOrderNumber();
    populateOrderSummary();
}

// Run the init function when the page loads
window.onload = init;