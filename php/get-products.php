<?php
$supabaseUrl = "https://rqytkpqeimtjgnpdenkm.supabase.co";
$supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJxeXRrcHFlaW10amducGRlbmttIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTA2NDA1NjAsImV4cCI6MjA2NjIxNjU2MH0.rX8L_qyx8DrXhA4tt3JCYvpetGHCvG7agprhFNtsL6k";

// Configuración de cabeceras HTTP para la respuesta
// header() es una función de PHP que envía una cabecera HTTP al navegador
header('Content-Type: application/json');

//Falta un cors


$url = $supabaseUrl . '/rest/v1/products';
$key = $supabaseKey;

//Crea una nueva sesion cURL para pedirle datos a la URL después

// curl_setopt	               Función para configurar opciones
// $ch	                       La conexión cURL que ya creaste
// CURLOPT_HTTPHEADER	       Esta opción específica que estás agregando headers HTTP personalizados
// $headers	                   Es un array con los headers que tú definiste antes


$ch = curl_init ($url); // Inicializa una nueva sesión cURL

$headers = [
    'apikey: ' . $supabaseKey,
    'Authorization: Bearer ' . $supabaseKey,
    'Content-Type: application/json'
];

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);

$response = curl_exec($ch);  // Aquí se guarda el JSON en una variable // Ejecutas la conexión → recibes JSON
$data = json_decode($response,true); //Convierto el JSON a un array asociativo

// Mostramos los datos en HTML

// Imprimo el array asociativo de forma legible

echo $response;


// print_r() es una función de PHP que imprime información sobre una variable de forma legible
// Puedes usar var_dump($data) para ver más detalles si es necesario
// var_dump() muestra información estructurada sobre una o más variables, incluyendo su tipo y valor


// curl_close($ch); // Cierro la conexión cURL
// Cierro la conexión cURL
// Ahora puedes usar $data para trabajar con los datos obtenidos de Supabase

?>