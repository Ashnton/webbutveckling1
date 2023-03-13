document.getElementById("compare-btn").addEventListener("click", compareProducts);

function compareProducts() {
    const selectedProduct1 = document.getElementById("product-picker1").value;
    const selectedProduct2 = document.getElementById("product-picker2").value;

    document.getElementById(selectedProduct1).style.display = "block";
    document.getElementById(selectedProduct2).style.display = "block";
}