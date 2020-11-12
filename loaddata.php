<?php 
session_start();
if(isset($_POST['plan'])){
$_SESSION['plan'] = $_POST['plan'];
$_SESSION['planname'] = $_POST['planname'];
$_SESSION['option'] = $_POST['option'];
}
if(isset($_POST['childrens'])){
$_SESSION['childrens'] = $_POST['childrens'];
}
include('apiGetTelkomFuneralQuote.php'); 
$ProductGuid = "Telkom Funeral";
$plan = $_SESSION['plan'];
$planname = $_SESSION['planname'];
$option = $_SESSION['option'];

if(isset($_POST['json_data_familyadded'])){
$json = $_POST['json_data_familyadded'];
	$familyrelation = $_POST['familyrelation'];
	$familyfirstname = $_POST['familyfirstname'];
	$familysurname = $_POST['familysurname'];
	$familyidnumber = $_POST['familyidnumber'];
	$familydateofbirth = $_POST['familydateofbirth'];
	$familyidgender = $_POST['familyidgender'];
	$familycoveramount = $_POST['familycoveramount'];
$_SESSION['json_data_familyadded'] = $json;
$_SESSION['familyrelation'] = $familyrelation;
$_SESSION['familyfirstname'] = $familyfirstname;
$_SESSION['familysurname'] = $familysurname;
$_SESSION['familyidnumber'] = $familyidnumber;
$_SESSION['familydateofbirth'] = $familydateofbirth;
$_SESSION['familyidgender'] = $familyidgender;
$_SESSION['familycoveramount'] = $familycoveramount;
$jsonfaaa = array();
$familyrelationarray = array();
for($j=0;$j<count($familyfirstname); $j++){
$familyidnumberarray = $familyidnumber[$j]['value'];
$familyrelationarray[] = $familyrelation[$j]['value'];
$familycover = $familycoveramount[$j]['value'];
$dateofbirth = $familydateofbirth[$j]['value'];
$year1 = substr($dateofbirth, 6,10);
$newyear1 = date("Y");
$dateofbirthage = $newyear1 - $year1;
$year = substr($familyidnumberarray, 0,2);
$currentYear = date("Y") % 100;
$prefix = "19";
if ($year < $currentYear)
$prefix = "20";
$id_year = $prefix.$year;
$newyear = date("Y");
$age = $newyear - $id_year;
if($familyidnumberarray){
$jsonfaaa[] = '{
		"AGE" : "'.$age.'",
		"PRODUCTOPTION" : "'.$familycoveramount[$j]['value'].'"
	  },';
}else{
$jsonfaaa[] = '{
	"AGE" : "'.$dateofbirthage.'",
	"PRODUCTOPTION" : "'.$familycoveramount[$j]['value'].'"
  },';
}
}


$data_json = '{
	"apiGetQuoteInput" : {
	  "PRODUCT" : "'.$ProductGuid.'",
	  "PLAN" : "'.$plan.'",
	  "OPTION" : "'.$option.'"
	},
	"apiExentedFmilyInput" : [';
	foreach($jsonfaaa as $row){
        $extendedfamilyarrayresult = $row;
		$data_json .=$extendedfamilyarrayresult;
}
	$data_json .= ']
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

for($k=0;$k<count($json['api_response']['apiExtendedFamilyOutput']); $k++){
	$familypremium = $json['api_response']['apiExtendedFamilyOutput'][$k]['PREMIUM'];

$_SESSION['childpremiumamount'] = $familypremium;
$familybenfitamount = $json['api_response']['apiExtendedFamilyOutput'][$k]['SUMINSURED'];
$explode = explode('R',$familybenfitamount);
$explode1 = explode('R',$familypremium);
$stripped = str_replace(' ', '', $explode[1]);
$stripped1 = str_replace(' ', '', $explode1[1]);
$sumbenefit += $stripped;
$sumpremium += $stripped1;
$_SESSION['familytotalpremium'] = 'R'.$sumpremium.'.00';
$_SESSION['familytotalbenefit'] = 'R'.$sumbenefit.'.00';
$_SESSION['childcoveramount'] = $familybenfitamount;
$split = explode('R',$familypremium);
$oldsplit = explode('R',$premium);
$finalpremiumamount = ($sumpremium) + ($oldsplit[1]);
$finalpremiumamountwithcountry = 'R'.$finalpremiumamount.'.00';
$_SESSION['finalbasicpremium'] = $finalpremiumamountwithcountry;
}
?>
<div class="mt-5 container box border-3x p-3 loaddata">
										<p class="f-14 lh-22 ls-0-18 font-strong ">Extended Funeral plan</p>
										<?php foreach($familyrelationarray as $row1){ ?>
										<label class="f-14 lh-22 ls-0-18 color-white w-100"><?php echo $row1; ?></label>
										<?php } ?>
										<hr class="border-white-top">
										<div class="row">
										<div class="col-sm-6">
										<p class="f-10 lh-15 family-strong uppercase mb-0">Basic premium</p>
										</div>
										<div class="col-sm-6 text-right">
											<label class="f-14 lh-28 ls-0-21 color-white family-strong"><?php 
											$totalpremiumamount = number_format($sumpremium, 0, '.', ' ')."\n";
											echo 'R'.$totalpremiumamount.'.00'; ?></label>
										</div>
										</div>
										<hr class="border-white-top">
										<p class="uppercase f-10 lh-15 family-strong mb-0">Benefit amount</p>
										<label class="f-32 lh-54 font-strong color-white"><?php 
											$totalbenefitamount = number_format($sumbenefit, 0, '.', ' ')."\n";
											echo 'R'.$totalbenefitamount.'.00'; ?></label>
										</div>
<?php } ?>