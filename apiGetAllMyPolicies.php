<?php 
$api_url = 'https://telkomtest.cloudcover.insure/apiGetAllMyPolicies';

$token = $_SESSION['token'];

$context = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic $token",
    ),
));

$result = file_get_contents($api_url, false, $context);

?>