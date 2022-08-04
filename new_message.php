<?php
header('Content-Type: application/json; charset=utf-8');
$array = array('message' => array());
$message= new stdClass();
$message->name = $_POST['name'];
$message->message = htmlspecialchars($_POST['message']);
$message->time = $_POST['time'];
$message->status = 'done';
if(strlen($_POST['message']) >= 500 || strlen($_POST['message']) <= 4 || strlen($_POST['name']) >= 50 || strlen($_POST['name']) <= 4){
    $message->status = 'error';
}else{
    array_push($array['message'],$message);
    $data = json_encode($array);
    $url = 'https://getpantry.cloud/apiv1/pantry/8c6b1475-4c16-4496-8249-64627e20e5d3/basket/weddingmessage';
    //The data you want to send via POST

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    //So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

    //execute post
    $result = curl_exec($ch);
    echo json_encode($message);
}
?>