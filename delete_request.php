<?php
$url='http://localhost/API_GETPOSTPATCHDELETE\API\api.php';  //api.php url

$productId=5;//Törölni kívánom az adatot id alapján (amit előzőleg felvettünk (POST), módosítás (PATCH))

$data = [
    'id' => $productId
];


//cURL inicializálása
$ch = curl_init($url);

//DELETE kérés beállítása
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

//Végrehajtás (kérés)
$response=curl_exec($ch);

//cURL lezárása
curl_close($ch);

//Kiírjuk a válasz
echo $response;

?>