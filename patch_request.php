<?php
$url='http://localhost/API_GETPOSTPATCHDELETE\API\api.php';  //api.php url

$productId=5;//Frissíteni kívánom az adatot id alapján (amit előzőleg felvettünk)

$data = [
    'id' => $productId,
    'name' => 'Updated Product Name', //új neve
    'price' => 29.99, //módosított adat
    'description' => 'Updated product description' //módosított adat
];


//cURL inicializálása
$ch = curl_init($url);

//POST kérés beállítása
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

//Végrehajtuk a kérést
$response=curl_exec($ch);

//Lezárása acURL-nek
curl_close($ch);

//Válasz kiírás
echo $response;