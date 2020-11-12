<?php 
session_start();
$ProductGuid = "Telkom Funeral";
$plan = $_SESSION['plan'];
$planname = $_SESSION['planname'];
$option = $_SESSION['option'];
$json = $_POST['json_data_familyadded'];
if(isset($json)){
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
}
?>
<div class="col-md-1"></div><div class="col-md-3 la-display-d records_content familyadded">
                                        <div class="pad bg-blue-gredient p-30 border-5x">
                                        <h2 class="text-left f-24 l-36 mb-15">Your policy summary</h2>
                                        <div class="bg-gray pl-30 pt-10 pb-2 mb-20">
                                            <label class="color-white f-30 l-50 ls-0-56 font-strong"><?php echo $premium; ?></label>
                                            <p class="f-10 l-15 color-white ls-15 uppercase">your total monthly premium</p>
                                        </div>
                                        <p class="f-14 lh-22 ls-0-18"><?php echo $planname; ?></p>
                                        <label class="f-14 lh-22 ls-0-18 color-white w-100">Spouse: 1</label>
                                        <label class="f-14 lh-22 ls-0-18 color-white w-100">Children: 2</label>
                                        <hr class="border-white-top">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <p class="f-12 lh-15 family-strong uppercase mb-0">Basic premium</p>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                            <label class="f-14 lh-28 ls-0-21 color-white family-strong"><?php echo $premium; ?></label>
                                            </div>
                                        </div>
                                        <hr class="border-white-top">
										<?php 
										//if(isset($_SESSION['json_data_familyadded'])){ ?>
										<div class="mt-5 container box border-3x p-3">
										<p class="f-14 lh-22 ls-0-18 font-strong ">Extended Funeral plan</p>
										<label class="f-14 lh-22 ls-0-18 color-white w-100">child: 1</label>
										<hr class="border-white-top">
										<div class="row">
										<div class="col-sm-6">
										<p class="f-12 lh-15 family-strong uppercase mb-0">Basic premium</p>
										</div>
										<div class="col-sm-6 text-right">
											<label class="f-14 lh-28 ls-0-21 color-white family-strong"><?php //echo $_SESSION['childpremiumamount']; ?></label>
										</div>
										</div>
										<hr class="border-white-top">
										<p class="uppercase f-12 lh-15 family-strong mb-0">Benefit amount</p>
										<label class="f-37 lh-54 font-strong color-white"><?php //echo $_SESSION['childcoveramount']; ?></label>
										</div>
										<?php //} ?>
                                        <p class="uppercase f-12 lh-15 family-strong mb-0">Benefit amount</p>
                                        <label class="f-37 lh-54 font-strong color-white"><?php echo $benfitamount; ?></label>
                                  <a href="#" class="genric-btn info bold-letters get-a-quote width-full azure-blue bg-white mt-3 pt-10 pb-10 uppercase" onClick="redirect()">give me a call</a>
                                                <p class="wow text-center f-14 mt-2">Need assistance? We'll call you.</p>
                                        </div>
                                    </div>