"use strict";


function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 100
  ) {
    document.getElementById("footer").style.opacity = "1";

    document.getElementById("footer").style.bottom = "0";

  } else {
    document.getElementById("footer").style.opacity = "0";

    document.getElementById("footer").style.bottom = "-50px";

  }
}
