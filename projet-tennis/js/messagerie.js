/**********Modale de connexion ******/
var modal = document.querySelector(".modal");
var btnopen = document.querySelector(".btn-connexion");
var btnclose = document.querySelector(".close");

var modalIsOpen = false;

btnopen.addEventListener("click", function() {
   if (modalIsOpen) {
      modal.style.display = "none";
      modalIsOpen = false;
   } else {
      modal.style.display = "block";
      modalIsOpen = true;
   }
});

btnclose.addEventListener("click", function() {
   modal.style.display = "none";
   modalIsOpen = false;
});
