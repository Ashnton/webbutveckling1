let buttons = document.getElementsByClassName("btn-buy");

for (let i = 0; i < buttons.length; i++) {
    let button = buttons[i];
    let product = button.id

    
    button.addEventListener("click", () => {
        if (localStorage.getItem("cart") != null) {
            let cart = localStorage.getItem("cart");
            cartContent = JSON.parse(cart);
        } else {
            let i = 0
            let item = {
                name: product,
                amount:i++
            }
            let cartContent = [item];
        }
            if (cartContent.includes(product) === false) {
                cartContent.push(product);
            }

            items = cartContent.forEach(item => {
                if (item === product) {
                    product.amount++;
                }
            });

            cartContent = JSON.stringify(items);
        localStorage.setItem("cart", cartContent);
        console.log(product);
    });
}