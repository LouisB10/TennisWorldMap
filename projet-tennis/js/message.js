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

boiteReception.addEventListener('click',function(){
  afficherMessages(1);
});
boiteArchive.addEventListener('click',function(){
  afficherMessages(2);
  console.log("archive");
});
boiteCorbeille.addEventListener('click',function(){
  afficherMessages(3);
  console.log("corbeille");
});


function afficherMessages(type_message){
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
                  <p data-id="${message.id}" id="archiver" class="btn-choix">ARCHIVER</p>
                </div>
              </div>
              <div class="choix-div">
                <div class="choix-icon">
                  <img src="../image/icon-repondre.png" alt="">
                </div>
                <div class="choix-texte">
                  <p data-id="${message.id}" id="repondre" class="btn-choix">REPONDRE</p>
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


      function archiverOuSupprimerMessage(id, action) {
        // Création de la requête AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'get_messages.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
        // Envoi de la requête avec les paramètres
        xhr.send(`id=${id}&action=${action}`);
      
        // Réception de la réponse de la requête
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Traitement de la réponse ici
            console.log(xhr.responseText);
          }
        }
      }




       // Ajout de l'événement "click" pour chaque bouton archiver
       const btnsArchiver = document.querySelectorAll('#archiver');
       btnsArchiver.forEach((btn) => {
         btn.addEventListener('click', () => {
           // Code de suppression du message
           const messageId = btn.getAttribute('data-id');
           console.log(`Archiver le message ${messageId}`);
         });
       });
         // Ajout de l'événement "click" pour chaque bouton supprimer
       const btnsSupprimer = document.querySelectorAll('#supprimer');
       btnsSupprimer.forEach((btn) => {
         btn.addEventListener('click', () => {
           // Code de suppression du message
           const messageId = btn.getAttribute('data-id');
           console.log(`Supprimer le message ${messageId}`);
         });
       });






       
    } else {
      messagesContainer.innerHTML =
          "Une erreur est survenue lors de la récupération des messages.";
    }
  };
  xhr.send();  
}




// btnSupprimer.forEach((btn) => {
//   btn.addEventListener('click', () => {
//     const messageId = btn.getAttribute('data-id');
//     console.log("Message ID:", messageId);
//     fetch(`get_messages.php?id=${messageId}&action=supprimer`)
//       .then((response) => {
//         if (response.ok) {
//           return response.json();
//         } else {
//           throw new Error(response.statusText);
//         }
//       })
//       .then((data) => {
//         console.log(data);
//         // Mettre à jour la page avec les nouveaux messages
//       })
//       .catch((error) => {
//         console.error(error);
//         alert('Une erreur est survenue lors de la suppression du message.');
//       });
//   });
// });



// const btnRepondre = document.querySelector('#repondre');
// const btnArchiver = document.querySelector('#archive');
// btnRepondre.addEventListener('click',function(){
//   /******En cours */
// });

// btnArchiver.addEventListener('click',function(){
//   console.log("message archivé");
// });