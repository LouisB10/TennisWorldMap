// Récupération des éléments <a> avec la classe "boite-choix"
const boites = document.querySelectorAll(".boite-choix");
// Récupération de la boîte de réception par défaut
const boiteReception = document.getElementById("boite-reception");
const boiteArchive = document.getElementById("boite-archive");
const boiteCorbeille = document.getElementById("boite-supprime");
// Ajout de la classe "active" à la boîte de réception par défaut
boiteReception.classList.add("active");

// Parcours de tous les éléments <a>
boites.forEach((boite) => {
  // Ajout de l'écouteur d'événement "click"
  boite.addEventListener("click", () => {
    // Suppression de la classe "active" de toutes les boîtes
    boites.forEach((b) => b.classList.remove("active"));
    // Ajout de la classe "active" à la boîte cliquée
    boite.classList.add("active");
  });
});

afficherMessages(1);

function afficherMessages(type_message) {
  document.querySelector(".message-div").setAttribute("data-id", type_message);

  const messagesContainer = document.querySelector(".message-div");

  var xhr = new XMLHttpRequest();
  xhr.open("GET", `get_messages.php?type_message=${type_message}`, true);
  xhr.onload = function () {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      var data = JSON.parse(xhr.responseText);
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
                  <p id="archiver" onclick="archiverOuSupprimerMessage(${
                    message.id
                  }, 'archiver'); afficherMessages(${document
          .querySelector(".message-div")
          .getAttribute("data-id")});">ARCHIVER</p>
                </div>
              </div>
              <div class="choix-div">
                <div class="choix-icon">
                  <img src="../image/icon-repondre.png" alt="">
                </div>
                <div class="choix-texte">
                  <p id="repondre" onclick="repondreMessage(${
                    message.id
                  }, 'repondre');">REPONDRE</p>
                </div>
              </div>  
              <div class="choix-div">
                <div class="choix-icon">
                  <img src="../image/icon-supprimer.png" alt="">
                </div>
                <div class="choix-texte">
                  <p id="supprimer" onclick="archiverOuSupprimerMessage(${
                    message.id
                  }, 'supprimer'); afficherMessages(${document
          .querySelector(".message-div")
          .getAttribute("data-id")});">SUPPRIMER</p>
                </div>
              </div>
            </div>
          </div>        
              `;
      });
      messagesContainer.innerHTML = messagesHTML;
    } else {
      messagesContainer.innerHTML =
        "Une erreur est survenue lors de la récupération des messages.";
    }
  };
  xhr.send();
}

function archiverOuSupprimerMessage(id, action) {
  // On créé un formulaire de données
  // On créé un objet XMLHttpRequest
  let xhr = new XMLHttpRequest();
  // On initialise notre requête avec la fonction open()
  xhr.open("GET", "../admin/get_messages.php?id=" + id + "&action=" + action, true);
  // On demande une réponse au format JSON
  xhr.responseType = "json";
  // On envoie la requête avec le formulaire
  xhr.send();
  // Dès que la réponse est reçue
  xhr.onload = function (e) {
    // Si le statut HTTP n'est pas 200 (donc n'est pas OK)
    if (xhr.status != 200) {
      // On affiche le statut et le message correspondant
      alert("Erreur " + xhr.status + " : " + xhr.statusText);
    } else {
      console.log(e);
    }
  }
  
}
// function repondreMessage(id, action) {
 
  
// }