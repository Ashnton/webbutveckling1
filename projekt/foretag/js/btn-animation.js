const element = document.getElementById('hero-div');

// Starts counting down the time until the animation should start
let timeLeft = 10;

// Update the count down every 1 second
let countdownTimer = setInterval(function() {
    timeLeft--;

    if (timeLeft < 0) {
      clearInterval(countdownTimer);
      document.getElementById('arrow-down').classList.add("bounce");
    }
}, 1000);