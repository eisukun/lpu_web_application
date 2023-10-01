// Listen for changes in item price, quantity, and discount percentage, and recalculate on change
document.getElementById("price").addEventListener("input", calculate);
document.getElementById("quantity").addEventListener("input", calculate);
document.getElementById("discount_percentage").addEventListener("input", calculate);

function calculate() {

// for debugging only, use inspect element then check Console
// if Hello didn't show up when u update quantity, there's an error

// console.log("Hello");

// Get the prices from the input textboxes
const itemPrice = parseFloat(document.getElementById("price").value);
const quantity = parseInt(document.getElementById("quantity").value);
const discountPercentage = parseInt(document.getElementById("discount_percentage").value) / 100;

// get the total amount
let totalAmount = itemPrice * quantity;


// get the discount option first
const discountOption = document.querySelector('input[name="discount_option"]:checked').value;

// add the discount variable
let discount = 0;


if (discountOption === "senior_citizen") {
    //totalAmount *= (1 - 0.20); // 20% discount for senior citizen
    discount = 0.20 * itemPrice;
} else if (discountOption === "with_disc_card") {
    //totalAmount *= (1 - 0.15); // 15% discount for with discount card
    discount = 0.15 * itemPrice;
} else if (discountOption === "employee_disc") {
    //totalAmount *= (1 - 0.10); // 10% discount for employee discount
    discount = 0.10 * itemPrice;
}

// calculate discount per item
let discountedItemPrice = itemPrice - discount;
// calculate total discount given
let totalDiscountGiven = (discount * quantity);
// calculate total discount amount
let totalDiscountedAmount = totalAmount - totalDiscountGiven;

// Update the input type fields
document.getElementById('total_price').value = totalAmount.toFixed(2);

document.getElementById('discounted_amount').value = (discount).toFixed(2);

document.getElementById('total_quantity').value=(discount*quantity).toFixed(2);

document.getElementById('total_discount_given').value = (totalDiscountGiven).toFixed(2);

document.getElementById('total_discounted_amount').value=(totalDiscountedAmount).toFixed(2)
}

// Listen for changes in the discount options and recalculate on change
document.querySelectorAll('input[name="discount_option"]').forEach(function (radio) {
    radio.addEventListener("change", calculate);
});

    // Function to calculate change
function calculateChange() {
    const cashGiven = parseFloat(document.getElementById("cash_given").value);
    const totalPrice = parseFloat(document.getElementById("total_discounted_amount").value);
    // You may need to calculate the total price based on the selected items.

    if (!isNaN(cashGiven) && !isNaN(totalPrice)) {
        const change = cashGiven - totalPrice;
        document.getElementById("change").value = change.toFixed(2);
    } else {
        alert("Please enter valid numbers for Cash Given and Total Price.");
    }
}

// Function to clear the calculator
function clearCalculator() {
    document.getElementById("calculatorInput").value = "";
}

// Function to save data
function saveData() {
    // Implement your save data logic here
    alert("Data saved.");
}

// Function to update data
function updateData() {
    // Implement your update data logic here
    alert("Data updated.");
}
    function toggleOptions() {
        var optionsColumn = document.getElementById("optionsColumn");
        if (optionsColumn.style.display === "block") {
            optionsColumn.style.display = "none";
        } else {
            optionsColumn.style.display = "block";
        }
    }
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip(); 
});
// Function to enable/disable the discount input field based on the selected radio button
function updateDiscountInput() {
    const discountInput = document.getElementById("discount_percentage");
    const discountOption = document.querySelector('input[name="discount_option"]:checked').value;

    // Define the discount percentages
    const discountPercentages = {
        "senior_citizen": 20,
        "with_disc_card": 15,
        "employee_disc": 10,
        "no_discount": 0
    };

    // Set the discount percentage based on the selected option
    discountInput.value = discountPercentages[discountOption];
    discountInput.disabled = discountOption === "no_discount"; // Disable if no discount is selected
}

// Listen for changes in the discount options and update the discount input
document.querySelectorAll('input[name="discount_option"]').forEach(function (radio) {
    radio.addEventListener("change", updateDiscountInput);
});

// Update the discount input initially
updateDiscountInput();