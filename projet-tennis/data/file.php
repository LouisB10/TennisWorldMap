<?php
// Tableau des requêtes API
$queryArray = [
	"https://tennisapi1.p.rapidapi.com/api/tennis/rankings/atp",
];
// Initialisation de la session cURL
$curl = curl_init();
// Configuration des options de cURL
curl_setopt_array($curl, [
	CURLOPT_URL => "https://tennisapi1.p.rapidapi.com/api/tennis/rankings/atp",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: tennisapi1.p.rapidapi.com",
		"X-RapidAPI-Key: 97ebc1a5b7msh5a4ad522719f753p18419cjsnb1259c55e031"
	],
]);
// Exécution de la requête cURL
$response = curl_exec($curl);
// Récupération de l'erreur de cURL s'il y en a une
$err = curl_error($curl);
// Nom du fichier de sortie
$file = "data.json";
// Fermeture de la session cURL
curl_close($curl);
// Décodage de la réponse JSON en un tableau associatif
$json = json_decode($response, true);
// Ajout du tableau des requêtes au tableau associatif JSON
array_push($json, $array);
// Vérification s'il y a une erreur de cURL
if ($err) {
	// Affichage de l'erreur s'il y en a une
	echo "cURL Error #:" . $err;
} else {
	// Écriture du fichier JSON avec la réponse de l'API
	file_put_contents($file, $response);
}
