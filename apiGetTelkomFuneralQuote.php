<?php 
$ProductGuid = "Telkom Funeral";
if(isset($_SESSION['plan'])){
$plan = $_SESSION['plan'];
$planname = $_SESSION['planname'];
$option = $_SESSION['option'];
}else{
}
if(!isset($_SESSION['plan'])){
$planamount = $_SESSION['planamount'];
$planname = $_SESSION['json_data']['planname'];
}
if(isset($_SESSION['json_data_family'])){
$sessionfamilyarray = $_SESSION['json_data_family'];
$json_data_family_count = $_SESSION['json_data_family_count'];
}else{
  $sessionfamilyarray = "";
  $json_data_family_count = "";
}
if(isset($_SESSION['json_data_post'])){
$bankname = $_SESSION['json_data_post']['p_bankname'];
$branch = $_SESSION['json_data_post']['branch'];
$branchcode = $_SESSION['json_data_post']['branchcode'];
$accountholdername = $_SESSION['json_data_post']['p_account_holder_name'];
$accountnumber = $_SESSION['json_data_post']['p_account_number'];
$accounttype = $_SESSION['json_data_post']['p_account_type'];
$debitorderdate = $_SESSION['json_data_post']['debitorderdate'];
$coverdate = $_SESSION['json_data_post']['coverdate'];
}
if(isset($_SESSION['json_data_array'])){
$sessionarray = $_SESSION['json_data_array'];
for($i=0;$i<count($sessionarray); $i++){
switch ($sessionarray[$i]['name']) {
  case "c_title":
    $client_title = $sessionarray[$i]['value'];
    break;
  case "c_firstname":
    $client_firstname = $sessionarray[$i]['value'];
    break;
  case "c_surname":
    $client_surname = $sessionarray[$i]['value'];
    break;
  case "c_idnumber":
    $client_idnumber = $sessionarray[$i]['value'];
    break;
  case "c_marital":
    $client_marital = $sessionarray[$i]['value'];
    break;
  case "c_contactnumber":
    $client_contactnumber = $sessionarray[$i]['value'];
    break;
  case "c_email":
    $client_email = $sessionarray[$i]['value'];
    break;
  case "c_address":
    $client_address = $sessionarray[$i]['value'];
    break;
  case "b_relationship":
    $beneficiary_relationship = $sessionarray[$i]['value'];
    break;
  case "b_firstname":
    $beneficiary_firstname = $sessionarray[$i]['value'];
    break;
  case "b_surname":
    $beneficiary_surname = $sessionarray[$i]['value'];
    break;
  case "b_idnumber":
    $beneficiary_idnumber = $sessionarray[$i]['value'];
    break;
  case "b_email":
    $beneficiary_email = $sessionarray[$i]['value'];
    break;
  case "b_contactnumber":
    $beneficiary_contactnumber = $sessionarray[$i]['value'];
    break;
  case "b_altcontactnumber":
    $beneficiary_altcontactnumber = $sessionarray[$i]['value'];
    break;
case "spouse_firstname":
    $spouse_firstname = $sessionarray[$i]['value'];
    break;
  case "spouse_surname":
    $spouse_surname = $sessionarray[$i]['value'];
    break;
  case "spouse_idnumber":
    $spouse_idnumber = $sessionarray[$i]['value'];
    break;
  case "child1_firstname":
    $child1_firstname = $sessionarray[$i]['value'];
    break;
  case "child1_surname":
    $child1_surname = $sessionarray[$i]['value'];
    break;
  case "child1_idnumber":
    $child1_idnumber = $sessionarray[$i]['value'];
    break;
  case "child1_idnumber_option":
    $child1_idnumber_option = $sessionarray[$i]['value'];
    break;
  case "child1_dateofbirth":
    $child1_dateofbirth = $sessionarray[$i]['value'];
    break;
  case "child1_gender":
    $child1_gender = $sessionarray[$i]['value'];
    break;
  case "child2_firstname":
    $child2_firstname = $sessionarray[$i]['value'];
    break;
  case "child2_surname":
    $child2_surname = $sessionarray[$i]['value'];
    break;
  case "child2_gender":
    $child2_gender = $sessionarray[$i]['value'];
    break;
  case "child2_idnumber":
    $child2_idnumber = $sessionarray[$i]['value'];
    break;
  case "child2_idnumber_option":
    $child2_idnumber_option = $sessionarray[$i]['value'];
    break;
  case "coveramount":
    $coveramount = $sessionarray[$i]['value'];
    break;
  case "fname":
    $firstname = $sessionarray[$i]['value'];
    break;
  case "surname":
    $surname = $sessionarray[$i]['value'];
    break;
  case "cnumber":
    $cnumber = $sessionarray[$i]['value'];
    break;
  case "income":
    $income = $sessionarray[$i]['value'];
    break;
	case "tandc":
    $tandc = $sessionarray[$i]['value'];
    break;
  default:
    //echo "Your favorite color is neither red, blue, nor green!";
}
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
		"AGE" : 30,
		"PRODUCTOPTION" : "'.$option.'"
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
$plan = $json['api_response']['apiGetQuoteOutPut']['PLAN'];
$premium = $json['api_response']['apiGetQuoteOutPut']['PREMIUM'];
$_SESSION['premiumamount'] = $premium;
$benfitamount = $json['api_response']['apiGetQuoteOutPut']['SUMINSURED'];
$_SESSION['coveramount'] = $benfitamount;
//print_r($json);
?>