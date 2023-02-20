let cart = localStorage.getItem("cart");
let cartContent = [];

cartContent = JSON.parse(cart);

for (i = 0; i < cartContent.length; i++) {
    
}

function cartItemDisplay(product, cartAmount) {
    const target = document.getElementById("cart-container");

    const item = document.createElement("div");
    item.id = product;

    target.appendChild(item);
    
    const header = document.createElement("h1");
    header.innerText(product)

    item.appendChild(header);

    const image = document.createElement("img");
    image.src = "bilder/" + product + ".jpg";
    image.alt = product
    image.className = "cartImage"

    item.appendChild(image);

    const amount = document.createElement("p");
    amount.innerText("Antal: " + cartAmount)

    item.appendChild(amount);
}
