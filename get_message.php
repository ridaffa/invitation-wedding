<?php
header('Content-Type: application/json; charset=utf-8');
$url = './message/message.json';
$readJSONFile = file_get_contents($url);
$array = json_decode($readJSONFile);
echo json_encode($array);
?>