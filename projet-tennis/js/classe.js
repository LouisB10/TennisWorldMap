/**********Changement de classe pour les boutons choix de boite ******/
document.addEventListener("DOMContentLoaded", function() {
    let boitesChoix = document.querySelectorAll(".boite-choix");
  
    boitesChoix.forEach(function(boiteChoix) {
      boiteChoix.addEventListener("click", function(event) {
        event.preventDefault();
        
        // supprimer la classe "active" de toutes les boites-choix
        boitesChoix.forEach(function(b) {
          b.classList.remove("active");
        });
  
        // ajouter la classe "active" à la boite-choix cliquée
        boiteChoix.classList.add("active");

        window.location.href = this.href;
      });
    });
  });
  
 