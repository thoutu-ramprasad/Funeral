<?php 
$api_url = 'https://telkomtest.cloudcover.insure/apiGetThisClient';

$token = $_SESSION['token'];

$context = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic $token",
    ),
));


$result = file_get_contents($api_url, false, $context);
$xml=simplexml_load_string($result) or die("Error: Cannot create object");
$array = json_decode(json_encode($xml), TRUE);
$firstname  = $array['ClientOut']['FIRSTNAMES'];
$surname  = $array['ClientOut']['SURNAME'];
$username = ucfirst($firstname.' '.$surname);
$_SESSION['client_username'] = $username;
?>