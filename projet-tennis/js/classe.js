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
  
 
  // Sélectionnez les boutons de la boîte de réception
const receptionBtn = document.querySelector('#boite-reception');
const archiveBtn = document.querySelector('#boite-archive');
const supprimeBtn = document.querySelector('#boite-supprime');

// Ajoutez un événement d'écouteur de clic à chaque bouton
receptionBtn.addEventListener('click', () => {
  afficherMessages(1); // Récupérer et afficher les messages de type 1
});

archiveBtn.addEventListener('click', () => {
  afficherMessages(2); // Récupérer et afficher les messages de type 2
});

supprimeBtn.addEventListener('click', () => {
  afficherMessages(3); // Récupérer et afficher les messages de type 3
});

function afficherMessages(type_message) {
  // Récupération des messages en appelant le fichier PHP via fetch
  fetch(`get_messages.php?type_message=${type_message}`)
    .then(response => response.text())
    .then(data => {
      // Affichage des messages dans la boîte de réception
      const boiteReception = document.querySelector('#boite-reception-messages');
      boiteReception.innerHTML = data;
    })
    .catch(error => console.error(error));
}