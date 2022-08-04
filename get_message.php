<?php
header('Content-Type: application/json; charset=utf-8');
// $url = './message/message.json';
// $readJSONFile = file_get_contents($url);
// $array = json_decode($readJSONFile);
$url = 'https://getpantry.cloud/apiv1/pantry/8c6b1475-4c16-4496-8249-64627e20e5d3/basket/weddingmessage';

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET'
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { 
    echo json_encode(null);  
}else{
    echo json_encode(json_decode($result)); 
}
?>