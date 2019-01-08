"use strict";

// window.onscroll = function() {
//   scrollFunction();
// };
let navbar = document.getElementById("navbar-js");
let scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
let lastScrollTop = scrollTop;

window.addEventListener('scroll', function (){
 scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
  if(scrollTop > lastScrollTop) {

    navbar.style.top = "-70px";
}   else {
    navbar.style.top = "0";
}
  lastScrollTop = scrollTop;


});


// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }
