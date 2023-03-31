let cart = [];

function getCart() {
  if (localStorage.getItem("cart") != null) {
    cart = JSON.parse(localStorage.getItem("cart"));
  }
  return cart;
}

function showContents() {
  let cartList = document.createElement("ul");
  for (let i = 0; i < cart.length; i++) {
    let item = cart[i];
    let cartItem = document.createElement("li");
    cartItem.innerHTML = item.name + " - " + item.amount;
    cartItem.setAttribute("data-index", i);

    // create buttons for each cart item
    let increaseButton = document.createElement("button");
    increaseButton.innerHTML = "+";
    increaseButton.addEventListener("click", () => {
      let item = cart[i];
      item.amount++;
      localStorage.setItem("cart", JSON.stringify(cart));
      cartItem.innerHTML = item.name + " - " + item.amount;
      window.location.reload();
    });

    let decreaseButton = document.createElement("button");
    decreaseButton.innerHTML = "-";
    decreaseButton.addEventListener("click", () => {
      let item = cart[i];
      if (item.amount > 1) {
        item.amount--;
        localStorage.setItem("cart", JSON.stringify(cart));
        cartItem.innerHTML = item.name + " - " + item.amount;
        window.location.reload();
      }
    });

    let removeButton = document.createElement("button");
    removeButton.innerHTML = "Remove";
    removeButton.addEventListener("click", () => {
      cart.splice(i, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      cartList.removeChild(cartItem);
      window.location.reload();
    });

    let buttonContainer = document.createElement("div");
    buttonContainer.appendChild(increaseButton);
    buttonContainer.appendChild(decreaseButton);
    buttonContainer.appendChild(removeButton);

    cartItem.appendChild(buttonContainer);
    cartList.appendChild(cartItem);
  }

  document.getElementById("cart-container").appendChild(cartList);
}

function createButtons(element, container) {
  // Code for creating the button for increasing the amount of a product
  const increaseButton = document.createElement("button");
  increaseButton.innerHTML = "+";
  increaseButton.addEventListener("click", increaseItemAmount);

  // Code for creating the button for decreasing the amount of a product
  const decreaseButton = document.createElement("button");
  decreaseButton.innerHTML = "-";
  decreaseButton.addEventListener("click", decreaseItemAmount);

  // Code for creating the button for removing a product
  const removeButton = document.createElement("button");
  removeButton.innerHTML = "Remove";
  removeButton.addEventListener("click", removeItem);

}

function increaseItemAmount() {
  // Code for increasing the amount
  
}

function decreaseItemAmount() {
  // Code for decreasing the amount
}

function removeItem() {
  // Code for removing the product
}