// Fetches the amount of slides to loop through
const slideAmount = document.getElementById("front-products-header").getAttribute("data-slideAmount");
let slides = []; 

for (let i = 0; i < slideAmount; i++) {
  slides[i] = document.getElementById('slide' + (i+1));
}

// for looping through the slides
let currentSlide = 1
slides[0].style.display = "block";

function nextSlide() {
  timer = setInterval(function() {
    slides[(currentSlide-1) % (slides.length)].style.display = "none";
    slides[currentSlide % (slides.length)].style.display = "block"  
    currentSlide ++;
}, 5000);
}
nextSlide();