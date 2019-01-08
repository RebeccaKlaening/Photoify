'use strict';
//
// function hearts() {
//   document.getElementById("heart-js").style.color = "red";
//
// }
//
// function hearts() {
//   document.getElementById("heart2-js").style.color = "red";
// }

function myFunction() {
  let element = document.getElementById("heart2-js");
   element.classList.toggle("heart2");
}

// let hearts = document.getElementById("heart-js");
//
// function addClass()
// {
//   hearts.classList.add('heart2');
// }
//
// function removeClass() {
//
//
//   hearts.classList.remove('heart');
//
// }
//



// const hearts = document.querySelector('hearts');
// const button =  document.querySelector('heart');
// button.addEventListener('click' ; () => {
// 	hearts.classList.add('heart2');
// })
// console.log(hearts);
//



// post button change comment or delete posts
const posts = [...document.querySelectorAll(".change-post")];

posts.forEach(post => {

 post.addEventListener('click', event => {
   const id = event.target.dataset.id;
   const postEdit = document.querySelector(`.post-edit[data-id="${id}"]`);
   postEdit.classList.toggle('slide-edit')
   // postEdit.classList.add('.slide-edit');
 });
});

//
// function heartLikes (x) {
//   x.classList.toggle("heart2-js");
// }
