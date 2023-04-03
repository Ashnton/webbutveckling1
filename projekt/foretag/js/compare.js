document.getElementById("product-picker1").addEventListener("change", compareProducts);
document.getElementById("product-picker2").addEventListener("change", compareProducts);

function compareProducts() {
    const productDivs = document.getElementsByClassName("product-div");
    for (let i = 0; i < productDivs.length; i++) {
        const element = productDivs[i];
        element.style.display = "none";    
        console.log("1");
    }

    const selectedProduct1 = document.getElementById("product-picker1").value;
    const selectedProduct2 = document.getElementById("product-picker2").value;

    document.getElementById(selectedProduct1).style.display = "block";
    document.getElementById(selectedProduct2).style.display = "block";
}