<?php
$url='http://localhost/API_GETPOSTPATCHDELETE\API\api.php';  //api.php url

//létre akarom hozni a következő adatot <- adatbázisba szeretném létrehozni az erősorrást
$data = [
    'name' => 'New product',
    'price' => 19.99,
    'description' => 'This is a new product description: prod5 car cleaner'
];


//cURL inicializálása
$ch = curl_init($url);

//POST kérés beállítása
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

//kérés végrehajtás
$response=curl_exec($ch);

//cURL session lezárás
curl_close($ch);

//válasz (eredmény kiírás)
echo $response;

?>