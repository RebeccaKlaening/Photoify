'use strict';

function openSlideMenu() {
document.getElementById('side-menu').style.width = '250px';


}

function closeSlideMenu() {
document.getElementById('side-menu').style.width = '0';
}




const popUp = document.getElementByClassName("pop-up");

  popUp.classList.toggle("description-popup");
