// Récupération des éléments <a> avec la classe "boite-choix"
const boites = document.querySelectorAll(".boite-choix");
// Récupération de la boîte de réception par défaut
const boiteReception = document.getElementById("boite-reception");
const boiteArchive = document.getElementById("boite-archive");
const boitCorbeille = document.getElementById("boite-supprime");
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

