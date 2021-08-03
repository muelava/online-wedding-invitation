let daysElem = document.querySelector('.countdown-container__days');
let hoursElem = document.querySelector('.countdown-container__hours');
let minutesElem = document.querySelector('.countdown-container__minutes');
let secondsElem = document.querySelector('.countdown-container__seconds');
let countdownContainerElem = document.querySelector('.countdown-container');

// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date("jun 8, 2021 11:00:00 UTC+8").getTime();


var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if (distance < 0) {
    clearInterval(x);
    countdownContainerElem.innerHTML = '00 : 00 : 00 : 00';
  }
  else{
    daysElem.innerHTML = `${days} <br><p style="font-size: 1.3rem">days</p>`;
  hoursElem.innerHTML = `${hours} <br><p style="font-size: 1.3rem">hours</p>`; 
  minutesElem.innerHTML = `${minutes} <br><p style="font-size: 1.3rem">minutes</p>`;
  secondsElem.innerHTML = `${seconds} <br><p style="font-size: 1.3rem">seconds</p>`;
  }
}, 1000);