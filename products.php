<?php
$url = "https://telkomtest.cloudcover.insure/";
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);

/* Get the HTML or whatever is linked in $url. */
$response = curl_exec($handle);

$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
// if($httpCode){
	// print_r($httpCode);exit;
// }

if($httpCode == 504) {
    echo "<script>location.href = './error?code=$httpCode';</script>";
} else {
    /* Process data */
}

curl_close($handle);
?>