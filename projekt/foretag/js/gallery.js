// JavaScript goes here
const slide1 = document.getElementById('slide1');
const slide2 = document.getElementById('slide2');
const slide3 = document.getElementById('slide3');
const slide4 = document.getElementById('slide4');

let slides = [slide1, slide2, slide3, slide4];
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