<?php
include 'handleApi.php';

// URL de la API
$api_url = 'https://www.example.com/api';

// Datos a enviar a la API (si es necesario)
$data = array(
  'name' => 'John Doe',
  'email' => 'johndoe@example.com'
);

// Llamar a la función para manejar la API
$response = handleApi($api_url, 'POST', $data);

// Procesar la respuesta de la API
$response_data = json_decode($response);

