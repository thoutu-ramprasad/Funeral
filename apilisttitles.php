<?php
/* Dropdowns */
$ch = curl_init();
$url = "https://telkomtest.cloudcover.insure/TelkomCloudCoverServices/apiListTitles/5";
$dataArray = array("s"=>'PHP CURL');
$data = http_build_query($dataArray);
$getUrl = $url."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	echo 'Request Error:' . curl_error($ch);
}
else
{
    //echo $response;
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");
    $array = json_decode(json_encode($xml), TRUE);

    $titlearray = $array['TitleQueue']['TITLE'];
}
 
curl_close($ch);


/* Dropdowns */
$ch = curl_init();
$url = "https://telkomtest.cloudcover.insure/apiListRelationships";
$dataArray = array("s"=>'PHP CURL');
$data = http_build_query($dataArray);
$getUrl = $url."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	echo 'Request Error:' . curl_error($ch);
}
else
{
    //echo $response;
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");
    $array = json_decode(json_encode($xml), TRUE);

    $relationshiparray = $array['RelationshipQueue']['RELATIONSHIP'];
}
 
curl_close($ch);
?>