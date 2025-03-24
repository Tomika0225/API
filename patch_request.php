<?php
$url='http://localhost/API_GETPOSTPATCHDELETE\API\api.php';  //api.php url

//létre akarom hozni a következő adatot <- adatbázisba szeretném létrehozni az erősorrást
$productId=5
$data = [
    'id' =>  $productId,
    'name' => 'Updated Product Name'
    'price' => 29.99,
    'description' => 'Updated product description ' // modosított adat
];


//cURL inicializálása
$ch = curl_init($url);

//POST kérés beállítása
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

//kérés végrehajtás
$response=curl_exec($ch);

//cURL session lezárás
curl_close($ch);

//válasz (eredmény kiírás)
echo $response;

?>