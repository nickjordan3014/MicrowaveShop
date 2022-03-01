function getOrderTotal() {
    let items = [ // stores the ids for the different microwaves
        "oldSchool",
        "normal",
        "smart"
    ];

    let itemValues = [ // stores prices for each type of item
        100,
        200,
        400
    ];

    let total = 0; // total price for order

    for (var i = 0; i < 3; i++) {
        let itemTotal = document.getElementById(items[i]).textContent; // total value for one item
        itemTotal = itemTotal * itemValues[i]; // multiplies amount of items by the price
        total = total + itemTotal; // adds all totals together for an overall total
    }
    
    let orderTotalDiv = document.getElementById("orderTotalDiv"); // gets the div to store new element in
    let orderTotalEle = document.createElement("h2"); // new element for order total to display
    orderTotalEle.append("Order Total: $" + total); // appends text and order amount
    orderTotalDiv.append(orderTotalEle); // appends the h2 element to the div

    document.getElementById("orderTotal").style.display = "none"; // makes the button disappear
}

function loadFunction() {
    document.getElementById("orderTotal").addEventListener("click", getOrderTotal, false);
}

window.addEventListener("load", loadFunction, false);