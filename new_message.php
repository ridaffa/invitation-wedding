<?php
header('Content-Type: application/json; charset=utf-8');
$url = './message/message.json';
$readJSONFile = file_get_contents($url);
$array = json_decode($readJSONFile);
$message= new stdClass();
$message->name = $_POST['name'];
$message->message = htmlspecialchars($_POST['message']);
$message->time = $_POST['time'];

$message->status = 'done';
if(strlen($_POST['message']) >= 500 || strlen($_POST['message']) <= 4 || strlen($_POST['name']) >= 50 || strlen($_POST['name']) <= 4){
    $message->status = 'error';
}else{
    array_push($array->message,$message);
$data = json_encode($array);
file_put_contents($url, $data);
}
echo json_encode($message);
?>