'use strict';


const formHeart = document.querySelectorAll(".form-heart");

formHeart.forEach(form => {

  form.addEventListener("submit", event => {
    event.preventDefault();

    const formData = new FormData(form);



      fetch("app/posts/likes.php", {
        method: "POST",
        body: formData
      })

        .then(response => response.json())

        .then(json => form[1].children[0].children[1].textContent = json);
      });
    });
