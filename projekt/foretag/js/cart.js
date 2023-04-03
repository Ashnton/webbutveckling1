// Defines variables for the icons here
const decreaseIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg>`;

const increaseIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>`

const removeIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>`

// Creates the cart array and checks if there is anything in local storage to then fetch the cart
let cart = [];
if (localStorage.getItem("cart") != null) {
  cart = JSON.parse(localStorage.getItem("cart"));
}

// Creates the cart container and adds it to the DOM, also adds the cart items to the cart container
let cartList = document.createElement("div");
for (let i = 0; i < cart.length; i++) {
  let item = cart[i];
  let cartDiv = document.createElement("div");
  cartDiv.className = "cartItemDiv";

  let cartItem = document.createElement("div");
  cartItem.className = "cartItemContent";

  let totalPrice = item.amount * item.price;
  cartItem.innerHTML = "<h2>" + item.name + "</h2>" + item.amount + " st <br>" + totalPrice + " kr";

  cartDiv.appendChild(cartItem);
  cartDiv.setAttribute("data-index", i);

  // create buttons for each cart item
  let increaseButton = document.createElement("button");
  increaseButton.innerHTML = increaseIcon;
  increaseButton.className = "inv-btn";

  increaseButton.addEventListener("click", () => {
    let item = cart[i];
    item.amount++;
    totalPrice = item.amount * item.price;
    localStorage.setItem("cart", JSON.stringify(cart));
    cartItem.innerHTML = "<h2>" + item.name + "</h2>" + item.amount + " st <br>" + totalPrice + " kr";

  });

  let decreaseButton = document.createElement("button");
  decreaseButton.innerHTML = decreaseIcon;
  decreaseButton.className = "inv-btn";

  decreaseButton.addEventListener("click", () => {
    let item = cart[i];
    if (item.amount > 1) {
      item.amount--;
      totalPrice = item.amount * item.price;
      localStorage.setItem("cart", JSON.stringify(cart));
      cartItem.innerHTML = "<h2>" + item.name + "</h2>" + item.amount + " st <br>" + totalPrice + " kr";

    }
  });

  let removeButton = document.createElement("button");
  removeButton.innerHTML = removeIcon;
  removeButton.className = "inv-btn";

  removeButton.addEventListener("click", () => {
    cart.splice(i, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    cartList.removeChild(cartDiv);
  });

  let buttonContainer = document.createElement("div");
  buttonContainer.className = "cartButtonContainer";
  buttonContainer.appendChild(increaseButton);
  buttonContainer.appendChild(decreaseButton);
  buttonContainer.appendChild(removeButton);

  cartDiv.appendChild(buttonContainer);
  cartList.appendChild(cartDiv);
}

document.getElementById("cart-container").appendChild(cartList);