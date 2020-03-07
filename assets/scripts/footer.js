"use strict";

let footer = document.getElementById("footer");
let scrollBottom = document.body.scrollBottom || document.documentElement.scrollBottom;
let lastScrollBottom = scrollBottom;

window.addEventListener('scroll', function () {
 scrollBottom = document.body.scrollBottom || document.documentElement.scrollBottom;
  if(scrollBottom < lastScrollBottom) {

    footer.style.bottom = "70px";
}   else {
    footer.style.bottom = "0";
}
  lastScrollBottom = scrollBottom;

});
