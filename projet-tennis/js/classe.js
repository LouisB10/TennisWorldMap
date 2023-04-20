/**********Changement de classe pour les boutons choix de boite ******/
  let boitesChoix = document.querySelectorAll(".boite-choix");

  boitesChoix.forEach(function (boiteChoix) {
    boiteChoix.addEventListener("click", function (event) {
      event.preventDefault();

      // supprimer la classe "active" de toutes les boites-choix
      boitesChoix.forEach(function (b) {
        b.classList.remove("active");
      });

      // ajouter la classe "active" à la boite-choix cliquée
      boiteChoix.classList.add("active");
    });
  });


// Sélectionnez les boutons de la boîte de réception
const receptionBtn = document.querySelector("#boite-reception");
const archiveBtn = document.querySelector("#boite-archive");
const supprimeBtn = document.querySelector("#boite-supprime");

// Ajoutez un événement d'écouteur de clic à chaque bouton
receptionBtn.addEventListener("click", () => {
  afficherMessages(1); // Récupérer et afficher les messages de type 1
});

archiveBtn.addEventListener("click", () => {
  afficherMessages(2); // Récupérer et afficher les messages de type 2
});

supprimeBtn.addEventListener("click", () => {
  afficherMessages(3); // Récupérer et afficher les messages de type 3
});

function afficherMessages(type_message) {
  // Affichage des messages dans la boîte de réception
  const messagesContainer = document.querySelector(".telle");

  // Récupération des messages en appelant le fichier PHP via fetch
  fetch(`get_messages.php?type_message=${type_message}`)
    .then((response) => response.json())
    .then((data) => {
      // Affichage des messages dans la boîte de réception
      let messagesHTML = "";
      data.forEach((message) => {
        messagesHTML += `
        <div class="flex-msg-choix" data-id="${message.id}">
          <div class="messagerie-message">
              <div class="message-top">
                  <div class="top-info">
                    <img src="../image/icon-user.png" alt="">
                    <p>${message.nom} ${message.prenom}</p>
                  </div>
                  <div class="top-info">
                    <img src="../image/icon-email.png" alt="">
                    <p>${message.email}</p>
                  </div>
                  <div class="top-info">
                    <img src="../image/icon-calendrier.png" alt="">
                    <p>${message.date_envoi}</p>
                  </div> 
              </div>
              <div class="message-bottom">
                <p>${message.message}</p>
              </div>
          </div>
          <div class="messagerie-choix">
                    <div class="choix-div">
                        <div class="choix-icon">
                          <img src="../image/icon-archive.png" alt="">
                        </div>
                        <div class="choix-texte">
                        <p data-id="${message.id}" class="btn-choix">ARCHIVER</p>
                        </div>
                    </div>
                    <div class="choix-div">
                        <div class="choix-icon">
                          <img src="../image/icon-repondre.png" alt="">
                        </div>
                        <div class="choix-texte">
                        <p data-id="${message.id}" class="btn-choix">REPONDRE</p>
                        </div>
                    </div>  
                    <div class="choix-div">
                        <div class="choix-icon">
                          <img src="../image/icon-supprimer.png" alt="">
                        </div>
                        <div class="choix-texte">
                          <p data-id="${message.id}" id="supprimer"class="btn-choix">SUPPRIMER</p>
                        </div>
                    </div>
                  </div>
          </div>        
            `;
      });
      messagesContainer.innerHTML = messagesHTML;
    })
    .catch((error) => {
      console.error(error);
      // Affichage d'un message d'erreur à l'utilisateur
      messagesContainer.innerHTML =
        "Une erreur est survenue lors de la récupération des messages.";
    });
}
const btnSuppr = document.querySelector("#supprimer");

btnSuppr.addEventListener("click", function () {
  const messageId = this.getAttribute("data-id");
  const url = "get_messages.php";
  const data = { id: messageId };

  fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ id: messageId, type_message: 2 }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Une erreur est survenue.");
      }
      return response.json();
    })
    .then((data) => {
      // Le message a été supprimé avec succès
      // Recharger la page pour afficher les messages mis à jour
      window.location.reload();
    })
    .catch((error) => {
      console.error(error);
      // Afficher un message d'erreur
    });
});
