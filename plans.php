<?php 

$ProductGuid = "Telkom Funeral";
// User data to send using HTTP POST method in curl
$data = array('loc:ProductGuid'=>$ProductGuid);

// Data should be passed as json format
$data_json = json_encode($data);

// API URL to send data
$url = 'https://telkomtest.cloudcover.insure/apiGetProductInfo';

// curl initiate
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// SET Method as a POST
curl_setopt($ch, CURLOPT_POST, 1);

// Pass user data in POST command
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute curl and assign returned data
$response  = curl_exec($ch);
// Close curl
curl_close($ch);

// See response if data is posted successfully or any error
$json = json_decode($response, true);
$plannameone = $json['api_response']['ProductPlans'][0]['PRODUCTPLANNAME'];
$plannametwo = $json['api_response']['ProductPlans'][1]['PRODUCTPLANNAME'];
$plannamethree = $json['api_response']['ProductPlans'][2]['PRODUCTPLANNAME'];
$plannamefour = $json['api_response']['ProductPlans'][3]['PRODUCTPLANNAME'];
$planone = $json['api_response']['ProductPlans'][0]['PRODUCTPLAN'];
$plantwo = $json['api_response']['ProductPlans'][1]['PRODUCTPLAN'];
$planthree = $json['api_response']['ProductPlans'][2]['PRODUCTPLAN'];
$planfour = $json['api_response']['ProductPlans'][3]['PRODUCTPLAN'];

?>