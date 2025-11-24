document.addEventListener("DOMContentLoaded", function() {
    const addItemBtn = document.getElementById("addItemBtn");
    const calculateTotalBtn = document.getElementById("calculateTotalBtn"); // Added calculate total button
    const itemsContainer = document.getElementById("itemsContainer");
    const serviceRadioButton = document.getElementById("service");
    const totalPriceLabel = document.getElementById("totalPriceLabel"); // Added total price label element

    let totalPrice = 0; // Variable to store total price

    addItemBtn.addEventListener("click", function() {
        addNewItem();
    });

    calculateTotalBtn.addEventListener("click", function() {
        calculateTotalPrice(); // Calculate total price when calculate total button is clicked
    });

    // Listen for changes in the service radio button state
    serviceRadioButton.addEventListener("change", function() {
        if (serviceRadioButton.checked) {
            // If the service radio button is checked, automatically add the service item
            addServiceItem();
        }
    });

    function addNewItem() {
        const newItemDiv = document.createElement("div");
        newItemDiv.classList.add("mechanic-textarea4");

        const itemNameHeading = document.createElement("h3");
        itemNameHeading.textContent = "Item Name:";
        newItemDiv.appendChild(itemNameHeading);

        const itemNameInput = document.createElement("input");
        itemNameInput.type = "text";
        itemNameInput.placeholder = "Item Name";
        newItemDiv.appendChild(itemNameInput);

        const priceHeading = document.createElement("h3");
        priceHeading.textContent = "Price:";
        newItemDiv.appendChild(priceHeading);

        const priceInput = document.createElement("input");
        priceInput.type = "number";
        priceInput.placeholder = "Price";
        newItemDiv.appendChild(priceInput);

        priceInput.addEventListener("change", function() {
            updateTotalPrice(); // Update total price when price input changes
        });

        itemsContainer.appendChild(newItemDiv);
    }

    function addServiceItem() {
        const newItemDiv = document.createElement("div");
        newItemDiv.classList.add("mechanic-textarea4");

        const itemNameHeading = document.createElement("h3");
        itemNameHeading.textContent = "Item Name:";
        newItemDiv.appendChild(itemNameHeading);

        const itemNameInput = document.createElement("input");
        itemNameInput.type = "text";
        itemNameInput.value = "Service"; // Set the value to "Service"
        itemNameInput.readOnly = true; // Make it read-only
        newItemDiv.appendChild(itemNameInput);

        const priceHeading = document.createElement("h3");
        priceHeading.textContent = "Price:";
        newItemDiv.appendChild(priceHeading);

        const priceInput = document.createElement("input");
        priceInput.type = "number";
        priceInput.placeholder = "Price";
        newItemDiv.appendChild(priceInput);

        priceInput.addEventListener("change", function() {
            updateTotalPrice(); // Update total price when price input changes
        });

        itemsContainer.appendChild(newItemDiv);
    }

    function updateTotalPrice() {
        totalPrice = 0; // Reset total price
        const priceInputs = document.querySelectorAll(".mechanic-bill input[type='number']");
        priceInputs.forEach(input => {
            totalPrice += parseFloat(input.value) || 0; // Add the price to total, parsing as float and defaulting to 0 if NaN
        });
        totalPriceLabel.textContent = `Total price = Rs.${totalPrice.toFixed(2)}`; // Update total price label
    }

    function calculateTotalPrice() {
        updateTotalPrice(); // Update total price
        alert(`Total price is: $${totalPrice.toFixed(2)}`); // Display total price in an alert (you can modify this to suit your needs)
    }
});
