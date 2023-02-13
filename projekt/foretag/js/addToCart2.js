let buttons = document.getElementsByClassName("btn-buy");

for (let i = 0; i < buttons.length; i++) {
    let button = buttons[i];
    let product = button.id;
    
    button.addEventListener("click", () => {
        let cartContent = [];
        if (localStorage.getItem("cart") != null) {
            let cart = localStorage.getItem("cart");
            cartContent = JSON.parse(cart);
        }

        let found = false;
        for (let j = 0; j < cartContent.length; j++) {
            if (cartContent[j].name === product) {
                cartContent[j].amount++;
                found = true;
                break;
            }
        }

        if (!found) {
            let item = {
                name: product,
                amount: 1
            };
            cartContent.push(item);
        }

        localStorage.setItem("cart", JSON.stringify(cartContent));
        console.log(product);
    });
}