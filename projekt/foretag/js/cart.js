let cart = [];
if (localStorage.getItem("cart") != null) {
  cart = JSON.parse(localStorage.getItem("cart"));
}

let cartList = document.createElement("ul");
for (let i = 0; i < cart.length; i++) {
  let item = cart[i];
  let cartItem = document.createElement("li");
  cartItem.innerHTML = item.name + " - " + item.amount;
  cartItem.setAttribute("data-index", i);
  cartList.appendChild(cartItem);
}

cartList.addEventListener("click", (event) => {
  if (event.target.tagName === "LI") {
    let itemIndex = parseInt(event.target.getAttribute("data-index"));

    let increaseButton = document.createElement("button");
    increaseButton.innerHTML = "+";
    increaseButton.addEventListener("click", () => {
      let item = cart[itemIndex];
      item.amount++;
      localStorage.setItem("cart", JSON.stringify(cart));
      event.target.innerHTML = item.name + " - " + item.amount;
    });

    let decreaseButton = document.createElement("button");
    decreaseButton.innerHTML = "-";
    decreaseButton.addEventListener("click", () => {
      let item = cart[itemIndex];
      if (item.amount > 1) {
        item.amount--;
        localStorage.setItem("cart", JSON.stringify(cart));
        event.target.innerHTML = item.name + " - " + item.amount;
      }
    });

    let removeButton = document.createElement("button");
    removeButton.innerHTML = "Remove";
    removeButton.addEventListener("click", () => {
      cart.splice(itemIndex, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      cartList.removeChild(event.target);
    });

    let buttonContainer = document.createElement("div");
    buttonContainer.appendChild(increaseButton);
    buttonContainer.appendChild(decreaseButton);
    buttonContainer.appendChild(removeButton);

    event.target.appendChild(buttonContainer);
  }
});

document.body.appendChild(cartList);
