"use strict";

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 100
  ) {

    document.getElementById("navbar").style.bottom = "-70px";
  } else {
    document.getElementById("navbar").style.top = "0";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
