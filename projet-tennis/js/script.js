fetchATPRank("../data/data.json"); // récupere les données du fichier json qui contient les données de 500 joueurs

let debCount = 0; //compteur
let finCount = 25; //compteur

function fetchATPRank(url) {
  //début fonction classement ATP
  fetch(url) //interroge le fichier json, requete
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      //gere les donnees
      data.rankings.forEach((rankings, i) => {
        // parcourt chaque élément de la propriété rankings
        if(i >= debCount && i < finCount) {
          /*appel fonctions création tableau en html/css*/
          createRowRank(); //fonction créer tableau
          fillRowRank( //fonction remplir les cases
            //nom des catégories(variable déclarée plus bas)
            textrang,
            textpays,
            textjoueur,
            textpoint, 
            rankings.ranking, //chemin du classement dans le tableau des donnees de l'api
            rankings.team.country.name, //chemin du nom du pays
            rankings.rowName, //chemin du Nom du joueur
            rankings.points //chemin du nombre de points
          );
          appendRowRank(); //fonction relier les élements
        }
      });
    });
}


nextbtn = document.querySelector(".nextPlayer");
nextbtn.addEventListener("click", function() {
  fetchATPRank("../data/data.json");
  debCount += 25;
  finCount += 25;
});

/**Déclaration des différentes cases du classement*/
/*déclaration Thead*/
let newRowH, newThRank, newThLand, newThPlayer, newThPoints, newThEarnings, newThHeight, newThWeight, newThStyle; //case du Thead
let newThRankP, newThLandP, newThPlayerP, newThPointsP, newThEarningsP ,newThHeightP, newThWeightP, newThStyleP; // donnée dans la case
let tblHead = document.querySelector("thead"); // on selectionne le thead vide déja présent dans l'html
/*déclaration Tbody*/
let newRowB, newTdRank, newTdland, newTdplayer, newTdPoints, newTdEarnings, newTdHeight, newTdWeight, newTdStyle; //case du Tbody
let newTdRankP, newTdlandP, newTdplayerP, newTdPointsP, newTdEarningsP, newTdHeightP, newTdWeightP, newTdStyleP; // donnée dans la case
let tblBody = document.querySelector("tbody"); // on selectionne le tbody vide déja présent dans l'html


/********************Fonction creation ligne du classement***********************************/
let createRowRankIni = false;
function createRowRank(typeClassement) {
  /*création des élements du thead dans l'html*/
  if (!createRowRankIni) {
    newRowH = document.createElement("tr");

    newThRank = document.createElement("th");
    newThRankP = document.createElement("p");

    newThLand = document.createElement("th");
    newThLandP = document.createElement("p");

    newThPlayer = document.createElement("th");
    newThPlayerP = document.createElement("p");

    newThPoints = document.createElement("th");
    newThPointsP = document.createElement("p");

    newThEarnings = document.createElement("th");
    newThEarningsP = document.createElement("p");

    newThHeight = document.createElement("th");
    newThHeightP = document.createElement("p");

    newThWeight = document.createElement("th");
    newThWeightP = document.createElement("p");

    newThStyle = document.createElement("th");
    newThStyleP = document.createElement("p");

    createRowRankIni = true;
  }
  /*création des élements du tbody dans l'html*/
  newRowB = document.createElement("tr");

  newTdRank = document.createElement("td");
  newTdRankP = document.createElement("p");

  newTdland = document.createElement("td");
  newTdlandP = document.createElement("p");

  newTdplayer = document.createElement("td");
  newTdplayerP = document.createElement("p");

  newTdPoints = document.createElement("td");
  newTdPointsP = document.createElement("p");

  newTdEarnings = document.createElement("Td");
  newTdEarningsP = document.createElement("p");

  newTdHeight = document.createElement("Td");
  newTdHeightP = document.createElement("p");

  newTdWeight = document.createElement("Td");
  newTdWeightP = document.createElement("p");

  newTdStyle = document.createElement("Td");
  newTdStyleP = document.createElement("p");

  /*************ajout des classes sur les Th, partie haute du tableau*****/
  newThRank.classList.add("colsmall", "colRang");
  newThRankP.classList.add("theadsmall");

  newThLand.classList.add("colsmall", "colPays");
  newThLandP.classList.add("theadsmall");

  newThPlayer.classList.add("collong", "colJoueur");
  newThPlayerP.classList.add("theadlong");

  newThPoints.classList.add("colsmall", "colPoints");
  newThPointsP.classList.add("theadsmall");

  newThEarnings.classList.add("collong", "colGains");
  newThEarningsP.classList.add("theadlong");

  newThHeight.classList.add("colsmall", "colTaille");
  newThHeightP.classList.add("theadsmall");

  newThWeight.classList.add("colsmall", "colPoids");
  newThWeightP.classList.add("theadsmall");

  newThStyle.classList.add("colsmall", "colStyle");
  newThStyleP.classList.add("theadsmall");

  /*************ajout des classes sur les Td, partie basse du tableau avec les données*****/
  newTdRank.classList.add("colsmall", "colRang");
  newTdRankP.classList.add("tbodysmall");

  newTdland.classList.add("colsmall", "colPays");
  newTdlandP.classList.add("tbodysmall");

  newTdplayer.classList.add("collong", "colJoueur");
  newTdplayerP.classList.add("tbodylong");

  newTdPoints.classList.add("colsmall", "colPoints");
  newTdPointsP.classList.add("tbodysmall");

  newTdEarnings.classList.add("collong", "colGains");
  newTdEarningsP.classList.add("tbodylong");

  newTdHeight.classList.add("colsmall", "colTaille");
  newTdHeightP.classList.add("tbodysmall");

  newTdWeight.classList.add("colsmall", "colPoids");
  newTdWeightP.classList.add("tbodysmall");

  newTdStyle.classList.add("colsmall", "colStyle");
  newTdStyleP.classList.add("tbodysmall");
}

/*Déclaration des noms des catégories*/
var textrang = "Rang";
var textpays = "Pays";
var textjoueur = "Joueur";
var textpoint = "Points";
var textgains = "Gains en €";
var texttaille = "Taille";
var textpoids = "Poids";
var textstyle = "Style";

/**********************************fonction remplir les cases******************* */
let fillRowRankIni = false;
function fillRowRank(
  textrang,
  textpays,
  textjoueur,
  textpoint,

  ranking,
  land,
  player,
  points
) {
  /*Remplir les p avec du texte*/
  if (!fillRowRankIni) {
    newThRankP.textContent = textrang;
    newThLandP.textContent = textpays;
    newThPlayerP.textContent = textjoueur;
    newThPointsP.textContent = textpoint;
    fillRowRankIni = true;
  }
  /*Remplir les p avec les valeurs de l'API*/
  newTdRankP.textContent = ranking;
  newTdlandP.textContent = land;
  newTdplayerP.textContent = player;
  newTdPointsP.textContent = points;
}

/**********************************fonction append******************* */
function appendRowRank() {
  /*relier les tr, les th et les p entre eux*/
  tblHead.append(newRowH);
  newRowH.append(newThRank);
  newThRank.append(newThRankP);
  newRowH.append(newThLand);
  newThLand.append(newThLandP);
  newRowH.append(newThPlayer);
  newThPlayer.append(newThPlayerP);
  newRowH.append(newThPoints);
  newThPoints.append(newThPointsP);

  /*************relier les tr, les td et les p entre eux*****/
  tblBody.append(newRowB);
  newRowB.append(newTdRank);
  newTdRank.append(newTdRankP);
  newRowB.append(newTdland);
  newTdland.append(newTdlandP);
  newRowB.append(newTdplayer);
  newTdplayer.append(newTdplayerP);
  newRowB.append(newTdPoints);
  newTdPoints.append(newTdPointsP);
}


/*******On récupère tout les boutons catégories******* */
let BtnRang = document.querySelector("#rang");
let BtnPays = document.querySelector("#pays");
let BtnJoueur = document.querySelector("#joueur");
let BtnPoints = document.querySelector("#points");
let BtnAge = document.querySelector("#age");
let BtnPhotos = document.querySelector("#photos");
let BtnGains = document.querySelector("#gains");
let BtnTaille = document.querySelector("#taille");
let BtnPoids = document.querySelector("#poids");
let BtnStyle = document.querySelector("#style");
let BtnReset = document.querySelector("#reset");


let btnstatusRang = true;
let btnstatusPays = true;
let btnstatusJoueur = true;
let btnstatusPoints = true;



BtnReset.addEventListener("click", function (){  
  let dataTH= document.querySelectorAll("th");
  dataTH.forEach((th) => {
    th.classList.toggle("styleUnactive");
  }
  )
  let dataTR= document.querySelectorAll("tr");
  dataTR.forEach((tr) => {
    tr.classList.toggle("styleUnactive");
  }
  )
});


BtnRang.addEventListener("click", function () {
  let dataRang = document.querySelectorAll(".colRang");
  if (btnstatusRang != true) {
    dataRang.forEach((rang) => {
      rang.classList.toggle("styleUnactive");
    });
    BtnRang.setAttribute(
      "style",
      "background: #f7ee1e;" +
        "outline: 4px solid #FFFFFF;" +
        "transform: translateY(4px);" +
        "transform: scale(0.9);" +
        "letter-spacing: 0em;"
    );
    btnstatusRang = true;
  } else if (btnstatusRang == true) {
    dataRang.forEach((rang) => {
      rang.classList.toggle("styleUnactive");
    });
    BtnRang.setAttribute(
      "style",
      "background: #ffffff;" +
        "outline: 4px solid #000000;" +
        "transform: translateY(4px);" +
        "transform: scale(1);" +
        "letter-spacing: 0.1em;"
    );
    btnstatusRang = false;
  }
});



BtnPays.addEventListener("click", function () {
  let dataPays = document.querySelectorAll(".colPays");
  if (btnstatusPays != true) {
    dataPays.forEach((pays) => {
      pays.classList.toggle("styleUnactive");
    });
    BtnPays.removeAttribute("style");
    btnstatusPays = true;
  } else if (btnstatusPays == true) {
    dataPays.forEach((pays) => {
      pays.classList.toggle("styleUnactive");
    });
    BtnPays.setAttribute(
      "style",
      "background: #f7ee1e;" +
        "outline: 4px solid #FFFFFF;" +
        "transform: translateY(4px);" +
        "transform: scale(0.9);" +
        "letter-spacing: 0em;"
    );
    btnstatusPays = false;
  }
});
BtnJoueur.addEventListener("click", function () {
  let dataJoueur = document.querySelectorAll(".colJoueur");
  if (btnstatusJoueur != true) {
    dataJoueur.forEach((joueur) => {
      joueur.classList.toggle("styleUnactive");
    });
    BtnJoueur.removeAttribute("style");
    btnstatusJoueur = true;
  } else if (btnstatusJoueur == true) {
    dataJoueur.forEach((joueur) => {
      joueur.classList.toggle("styleUnactive");
    });
    BtnJoueur.setAttribute(
      "style",
      "background: #f7ee1e;" +
        "outline: 4px solid #FFFFFF;" +
        "transform: translateY(4px);" +
        "transform: scale(0.9);" +
        "letter-spacing: 0em;"
    );
    btnstatusJoueur = false;
  }
});
BtnPoints.addEventListener("click", function () {
  let dataPoints = document.querySelectorAll(".colPoints");
  if (btnstatusPoints != true) {
    dataPoints.forEach((points) => {
      points.classList.toggle("styleUnactive");
    });
    BtnPoints.removeAttribute("style");
    btnstatusPoints = true;
  } else if (btnstatusPoints == true) {
    dataPoints.forEach((points) => {
      points.classList.toggle("styleUnactive");
    });
    BtnPoints.setAttribute(
      "style",
      "background: #f7ee1e;" +
        "outline: 4px solid #FFFFFF;" +
        "transform: translateY(4px);" +
        "transform: scale(0.9);" +
        "letter-spacing: 0em;"
    );
    btnstatusPoints = false;
  }
});




/*
           
            <th class="colrang"><p class="thead-rank">Rang</p></th>
            <th class="colpays"><p class="thead-country">Pays</p></th>
            <th class="coljoueur"><p class="thead-name">Joueur</p></th>
            <th class="colpoints"><p class="thead-points">Points</p></th>
            <th class="colage"><p class="thead-age">Âge</p></th>
            <th class="colphotos"><p class="thead-picture">Photos</p></th>
            <th class="coltaille"><p class="thead-taille">Taille</p></th>
            <th class="colpoids"><p class="thead-poids">Poids</p></th>
            <th class="colstyle"><p class="thead-style">Style</p></th>
            <th class="colgains"><p class="thead-earnings">Gains en €</p></th> -->

        <tr>
          <td class="colrang"><p class="tbody-rank">#</p></td>
            <td class="colpays"><p class="tbody-country"><img alt="" src="image/drapofr.png" class="tbody-country" style="object-fit:cover;"></p></td>
            <td class="coljoueur"><p class="tbody-name" id=""></p></td>
            <td class="colpoints"><p class="tbody-points">??????</p></td>
            <td class="colage"><p class="tbody-age">??ans</p></td>
            <td class="colphotos"><p class="tbody-picture"><img alt="" src="image/gael.jpg" class="tbody-picture" style="object-fit:cover;"></p></td>
            <td class="coltaille"><p class="tbody-taille">?.??m</p></td>
            <td class="colpoids"><p class="tbody-poids">???kg</p></td>
            <td class="colstyle"><p class="tbody-style">G/D</p></td>
            <td class="colgains"><p class="tbody-earnings">1 000 000€</p></td>
        </tr>
      */

// fetch('https://tennisapi1.p.rapidapi.com/api/tennis/player/14486', options)
// 	.then(response => response.json())
// 	.then(response => {
//     console.log(response.team.playerTeamInfo);
//     console.log(response.team.playerTeamInfo.height); /******TAILLE******/
//     console.log(response.team.playerTeamInfo.prizeTotal);/******Gains******/
//     console.log(response.team.playerTeamInfo.weight);/******POIDS******/
//     console.log(response.team.playerTeamInfo.plays);/******STYLE DE JEU (gaucher/droitier)******/
//   })
// 	.catch(err => console.error(err));

// fetch('https://tennisapi1.p.rapidapi.com/api/tennis/rankings/atp', options)
// 	.then(response => response.json())
// 	.then(response =>{
//     console.log(response);
//     console.log(response.rankings[0].ranking);/****RANG*****/
//     console.log(response.rankings[0].team.country.name);/****PAYS*****/
//     console.log(response.rankings[0].rowName);/****JOUEUR*****/
//     console.log(response.rankings[0].points);/****POINTS ATP*****/
//     console.log(response.rankings[0].team.id);/****ID JOUEUR pour le fetch au dessus*****/
//   })
// 	.catch(err => console.error(err));
