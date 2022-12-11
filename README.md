# Manejo de API con PHP
Para manejar una API en PHP, puedes crear una función que realice las operaciones necesarias para interactuar con la API y procesar la respuesta.

A continuación te muestro un ejemplo de cómo podrías implementar esto en PHP

Función para manejar una API

<code>handleApi($url, $method, $data = array());</code>

En este ejemplo, la función <code>handleApi()</code> toma como parámetros la URL de la API, el método de solicitud <code>(POST, GET, PUT, etc.)</code> y opcionalmente un array de datos a enviar a la API. Utiliza la función <code>curl_exec()</code> de PHP para enviar la solicitud a la API y devuelve la respuesta.

Para usar esta función, simplemente puedes llamarla proporcionando la URL de la API, el método de solicitud y, opcionalmente, los datos a enviar, como se muestra a continuación en la pagina de ejemplo.

En este ejemplo, se llama a la función <code>handleApi()</code> con la URL de la API, el método de solicitud (POST) y los datos a enviar. 

Luego, se procesa la respuesta de la API utilizando la función <code>json_dec</code>
