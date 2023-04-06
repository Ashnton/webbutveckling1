let buttons = document.getElementsByClassName("btn-buy");

for (let i = 0; i < buttons.length; i++) {
    let button = buttons[i];
    let product = button.id;
    let productPrice = button.getAttribute("data-productPrice");
    
    button.addEventListener("click", () => {
        let cartContent = [];
        if (localStorage.getItem("cart") !== null) {
            let cart = localStorage.getItem("cart");
            cartContent = JSON.parse(cart);
        }

        let existsInCart = false;
        for (let j = 0; j < cartContent.length; j++) {
            if (cartContent[j].name === product) {
                cartContent[j].amount++;
                existsInCart = true;
                break;
            }
        }

        if (!existsInCart) {
            let item = {
                name: product,
                amount: 1,
                price: productPrice
            };
            cartContent.push(item);
        }

        localStorage.setItem("cart", JSON.stringify(cartContent));

        document.getElementById(product).innerText = "Tillagd";
        setTimeout(function () {
            document.getElementById(product).innerText = "Köp";
        }, 5000)
    });
}