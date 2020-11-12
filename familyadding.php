<?php 
session_start();
$ProductGuid = "Telkom Funeral";
$plan = $_SESSION['plan'];
$planname = $_SESSION['planname'];
$option = $_SESSION['option'];
$json = $_POST['json_data_familyadded'];
$_SESSION['json_data_familyadded'] = $json;
for($i=0;$i<count($json); $i++){
switch ($json[$i]['name']) {
	case "idnumber":
		$idnumber = $json[$i]['value'];
		$year = substr($idnumber, 0,2);
		$currentYear = date("Y") % 100;
		$prefix = "19";
		if ($year < $currentYear)
		$prefix = "20";
		$id_year = $prefix.$year;
		$year = date("Y");
		$age = $year - $id_year;
	  break;
	  case "cover":
		$familycover = $json[$i]['value'];
	  break;
	default:
}
	
}

$data_json = '{
	"apiGetQuoteInput" : {
	  "PRODUCT" : "'.$ProductGuid.'",
	  "PLAN" : "'.$plan.'",
	  "OPTION" : "'.$option.'"
	},
	"apiExentedFmilyInput" : [
	  {
		"AGE" : "'.$age.'",
		"PRODUCTOPTION" : "'.$familycover.'"
	  }
	]
  }';


// API URL to send data
$url = 'https://telkomtest.cloudcover.insure/apiGetTelkomFuneralQuote';

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

$premium = $json['api_response']['apiExtendedFamilyOutput'][0]['PREMIUM'];
$_SESSION['childpremiumamount'] = $premium;
$benfitamount = $json['api_response']['apiExtendedFamilyOutput'][0]['SUMINSURED'];
$_SESSION['childcoveramount'] = $benfitamount;

?>