// image slider
var bannerStatus = 1;

function bannerLoop() {

    if (bannerStatus === 1) {
        document.getElementById("imgban2").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban1").style.top = "-10vh";
        document.getElementById("imgban1").style.zIndex = "10";
        document.getElementById("imgban2").style.top = "-1010vh";
        document.getElementById("imgban2").style.zIndex = "15";
        document.getElementById("imgban3").style.top = "-2010vh";
        document.getElementById("imgban3").style.zIndex = "5";
        document.getElementById("imgban4").style.top = "110vh";
        document.getElementById("imgban4").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban2").style.opacity = "1";
    }, 4000);
        bannerStatus = 2;
    }
    else if (bannerStatus === 2) {
        document.getElementById("imgban3").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban2").style.top = "-10vh";
        document.getElementById("imgban2").style.zIndex = "10";
        document.getElementById("imgban3").style.top = "-1010vh";
        document.getElementById("imgban3").style.zIndex = "15";
        document.getElementById("imgban4").style.top = "-2010vh";
        document.getElementById("imgban4").style.zIndex = "5";
        document.getElementById("imgban1").style.top = "110vh";
        document.getElementById("imgban1").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban3").style.opacity = "1";
    }, 4000);
        bannerStatus = 3;
    }
    else if (bannerStatus === 3) {
        document.getElementById("imgban4").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban3").style.top = "-10vh";
        document.getElementById("imgban3").style.zIndex = "10";
        document.getElementById("imgban4").style.top = "-1010vh";
        document.getElementById("imgban4").style.zIndex = "15";
        document.getElementById("imgban1").style.top = "-2010vh";
        document.getElementById("imgban1").style.zIndex = "5";
        document.getElementById("imgban2").style.top = "110vh";
        document.getElementById("imgban2").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban4").style.opacity = "1";
    }, 4000);
        bannerStatus = 4;
    }
    else if (bannerStatus === 4) {
        document.getElementById("imgban1").style.opacity = "0";
        setTimeout(function() {
        document.getElementById("imgban4").style.top = "-10vh";
        document.getElementById("imgban4").style.zIndex = "10";
        document.getElementById("imgban1").style.top = "-1010vh";
        document.getElementById("imgban1").style.zIndex = "15";
        document.getElementById("imgban2").style.top = "-2010vh";
        document.getElementById("imgban2").style.zIndex = "5";
        document.getElementById("imgban3").style.top = "110vh";
        document.getElementById("imgban3").style.zIndex = "1";
    }, 1000);
    setTimeout(function(){
        document.getElementById("imgban1").style.opacity = "1";
    }, 4000);
        bannerStatus = 1;
    }
}
bannerLoop();

window.onload=function(){
var startLoop = setInterval(function() {
    bannerLoop();
}, 4000);
}
//  


//cookie wall
document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptcookiesbtn = document.getElementById('accept-cookies');
  
    //check if the user has already consented to cookies
    if (!localStorage.getItem('cookieConsent')) {
        cookieBanner.style.display = 'block';
    }
  
    //add an event listener to the "Accept cookies" button
    acceptcookiesbtn.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', true);
        cookieBanner.style.display = 'none';
    });
  });

// Set the date we're counting down to
let countDownDate = new Date("May 5, 2023 15:24:25").getTime();

// update the count down every 1 second

let loop = setInterval(function(){
    let now = new Date().getTime();
    let distance = countDownDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    // Output the result in an element with id="demo"
    document.getElementById("saleTime").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("saleTime").innerHTML = "EXPIRED";
    }
  }, 1000);


