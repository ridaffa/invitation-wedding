<?php
header('Content-Type: application/json; charset=utf-8');
$url = './message/message.json';
$readJSONFile = file_get_contents($url);
$array = json_decode($readJSONFile);
$message= new stdClass();
$message->name = $_POST['name'];
$message->message = $_POST['message'];
$message->time = $_POST['time'];
array_push($array->message,$message);
$data = json_encode($array);
file_put_contents($url, $data);
$message->status = 'done';
echo json_encode($message);
?>