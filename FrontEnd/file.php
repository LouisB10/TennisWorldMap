<?php

// $queryArray = [
// 	"https://tennisapi1.p.rapidapi.com/api/tennis/rankings/atp",

// ];

// $curl = curl_init();

// 	curl_setopt_array($curl, [
// 		CURLOPT_URL => "https://tennisapi1.p.rapidapi.com/api/tennis/rankings/atp",
// 		CURLOPT_RETURNTRANSFER => true,
// 		CURLOPT_FOLLOWLOCATION => true,
// 		CURLOPT_ENCODING => "",
// 		CURLOPT_MAXREDIRS => 10,
// 		CURLOPT_TIMEOUT => 30,
// 		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 		CURLOPT_SSL_VERIFYPEER => false,
// 		CURLOPT_CUSTOMREQUEST => "GET",
// 		CURLOPT_HTTPHEADER => [
// 			"X-RapidAPI-Host: tennisapi1.p.rapidapi.com",
// 			"X-RapidAPI-Key: 97ebc1a5b7msh5a4ad522719f753p18419cjsnb1259c55e031"
// 		],
// 	]);



// $response = curl_exec($curl);
// $err = curl_error($curl);


// $file = "data.json";

// curl_close($curl);

// $array = ['daaate' => date("d")];
// $json = json_decode($response, true);
// array_push($json, $array);


// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	file_put_contents($file, $response);
// }

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://tennisapi1.p.rapidapi.com/api/tennis/rankings/atp",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: tennisapi1.p.rapidapi.com",
        "X-RapidAPI-Key: 97ebc1a5b7msh5a4ad522719f753p18419cjsnb1259c55e031"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$file = "data.json";

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    file_put_contents($file, $response);
}

curl_close($curl);

// Deuxième curl pour récupérer les données supplémentaires
// $queryArray = json_decode(file_get_contents("data.json"), true)["rankings"];

// foreach ($queryArray as $queryItem) {
//     $playerId = $queryItem["team"]["id"];
    
//     $curl = curl_init();

//     curl_setopt_array($curl, [
//         CURLOPT_URL => "https://tennisapi1.p.rapidapi.com/api/tennis/player/$playerId",
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_ENCODING => "",
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 30,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 		CURLOPT_SSL_VERIFYHOST => false,
//     	CURLOPT_SSL_VERIFYPEER => false,
//         CURLOPT_CUSTOMREQUEST => "GET",
//         CURLOPT_HTTPHEADER => [
//             "X-RapidAPI-Host: tennisapi1.p.rapidapi.com",
//             "X-RapidAPI-Key: 97ebc1a5b7msh5a4ad522719f753p18419cjsnb1259c55e031"
//         ],
//     ]);

//     $response = curl_exec($curl);
//     $err = curl_error($curl);

//     $file = "data1.json";

//     if ($err) {
//         echo "cURL Error #:" . $err;
//     } else {
//         file_put_contents($file, $response, FILE_APPEND);
//     }

//     curl_close($curl);
// }
