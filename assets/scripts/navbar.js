"use strict";

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 100
  ) {

    document.getElementById("navbar-js").style.top = "-70px";
  } else {
    document.getElementById("navbar-js").style.top = "0";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
