<?php 
session_start();
$ProductGuid = "Telkom Funeral";
$plan = $_SESSION['plan'];
$planname = $_SESSION['planname'];
$option = $_SESSION['option'];
$familyrelation = $_POST['familyrelation'];
$familyfirstname = $_POST['familyfirstname'];
$familysurname = $_POST['familysurname'];
$loopvalue = $_POST['loopvalue'];
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
$familyfirstnamenarray = $familyfirstname[$j]['value'];
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


?>
<div class="addextend">
 <hr class="mt-5 border-top-columbia-blue mb-4"> 
 <p class="f-24 blue-gray mt-1 l-32">Add your extended family to your plan.</p>
 <p class="f-12 blue-gray mt-0 l-20 mb-0 lh-20 ls-0-1">Plan ahead for your family s future, and add them to your plan.</p>
 <p class="f-12 gray mt-0 l-32 lh-20 ls-0-14">You can add up to 14 extended family members.</p>
 <?php 
 for($k=0;$k<count($json['api_response']['apiExtendedFamilyOutput']); $k++){ ?>
 <div class="appendresponse">
 <p class="uppercase f-16 l-23 ls-0-5 blue-gray mt-3"><?php echo ucfirst($familyfirstname[$k]['value']); ?> will get</p>
 <div class="row"> 
 <div class="container"> 
 <div class="col-4 pl-0"> 
 <div class="default-select" id="default-select">
	<div class="nice-select" tabindex="0"><span class="current"><?php echo $json['api_response']['apiExtendedFamilyOutput'][$k]['SUMINSURED']; ?></span>
	</div>
 </div>
 </div>
 <div class="col-6">
 </div>
 </div>
 </div>
 <div class="w-100 mt-2"> 
 <p class="f-24 l-32 ls-0-minus-2 blue-gray w-100">worth of cover for <b class="family-strong blue-gray"><?php echo $json['api_response']['apiExtendedFamilyOutput'][$k]['PREMIUM']; ?></b> per month.</p>
 <div class="azure-blue">
 <a href="javascript:void(0)">
 <span class="azure-blue f-14 l-20 ls-0-5 uppercase mr-2 family-strong familymember_edit" id="<?php echo $loopvalue[$k]['value']; ?>">Edit</span>
 </a> | <a href="javascript:void(0)">
 <span class=" ml-2 azure-blue f-14 l-20 ls-0-5 uppercase family-strong remove_family_member" id="<?php echo $loopvalue[$k]['value']; ?>">Remove</span>
 </a>
 </div>
 </div>
 <hr class="mt-5 border-top-columbia-blue mb-4">
 </div>
 <?php } ?>
 </div>