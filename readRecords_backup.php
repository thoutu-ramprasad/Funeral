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
}
?><div class="se-pre-con-inner"></div>
<div class="la-display-d">
                                        <div class="pad bg-blue-gredient p-30 border-5x ">
                                        <h2 class="text-left f-24 l-36 mb-15">Your policy summary</h2>
                                        <div class="bg-gray pl-30 pt-10 pb-2 mb-20">
                                            <label class="color-white f-30 l-50 ls-0-56 font-strong"><?php echo isset($finalpremiumamountwithcountry) ? $finalpremiumamountwithcountry : $premium; ?></label>
                                            <p class="f-10 l-15 color-white ls-15 uppercase">your total monthly premium</p>
                                        </div>
                                        <p class="f-14 lh-22 ls-0-18"><?php echo $planname; ?></p>
										<?php if($_SESSION['plan'] == 'TelFun Family' || $_SESSION['plan'] == 'TelFun Spouse'){ ?>
                                        <label class="f-14 lh-22 ls-0-18 color-white w-100">Spouse: 1</label>
										<?php }?>
										<?php if($_SESSION['plan'] == 'TelFun Family' || $_SESSION['plan'] == 'TelFun Children'){ ?>
                                        <label class="f-14 lh-22 ls-0-18 color-white w-100" >Children: <?php if(isset($_SESSION['childrens'])){ ?> <?php echo $_SESSION['childrens']; ?></label>
										<?php }} ?>
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
                                        <p class="uppercase f-12 lh-15 family-strong mb-0">Benefit amount</p>
                                        <label class="f-37 lh-54 font-strong color-white"><?php echo $benfitamount; ?></label>
										<div class="loaddata"></div>
                                  <a href="#" class="genric-btn info bold-letters get-a-quote width-full color-white bg-bright-blue mt-3 pt-10 pb-10 uppercase" onClick="redirect()">call me back</a>
                                                <p class="wow text-center f-14 mt-2">Need assistance? We'll call you.</p>
                                        </div>
                                    </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 la-display-m" id="headingOne">
<div class="row bg-blue-gredient p-10 border-5x res-summary mt-3 mb-4">
<div class="col-12 mt-3">
              <div class="bg"></div>
            </div>
<div class="col-8">
<h2 class="text-left f-24 l-36 ls-minus-2 color-white res-summary"> 
	<button type="button" class="p-0 text-left f-24 l-36 ls-minus-2 color-white res-summary btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseOne" style="text-decoration:none;">Your policy summary</button>
</h2>
</div>
<div class="col-4 text-right">
	<label class="color-white f-20 l-50 ls-0-56 font-strong m-0"><?php echo $premium; ?></label>
</div>
<div class="col-12 text-right">
	<label class="color-white f-14 l-22 ls-0-18 res-premiun">monthly premium</label>
</div>
<div id="collapseOne" class="col-12 collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="col-12 text-left card-body p-1">
                    <p>
						<div class="col-12 bg-gray pl-30 pt-10 pb-2 mb-20 text-left">
                                    <label class="color-white f-30 l-50 ls-0-56 font-strong"><?php echo $premium; ?></label>
                                    <p class="f-10 l-15 color-white ls-15 uppercase">your total monthly premium</p>
                                  </div>   
								  <p class="f-14 lh-22 ls-0-18"><?php echo $planname; ?></p>
                                  <label class="f-14 lh-22 ls-0-18 color-white w-100">Spouse: 1</label>
                                  <label class="f-14 lh-22 ls-0-18 color-white w-100">Children: 2</label>
                                  <hr class="border-white-top">
                                  <div class="row">
                                    <div class="col-6">
                                    <p class="f-12 lh-15 family-strong uppercase mb-0">Basic premium</p>
                                    </div>
                                    <div class="col-6 text-right">
                                      <label class="f-14 lh-28 ls-0-21 color-white family-strong"><?php echo $premium; ?></label>
                                    </div>
                                  </div>
								  <hr class="border-white-top">
                                  <p class="uppercase f-12 lh-15 family-strong mb-0">Benefit amount</p>
                                  <label class="f-37 lh-54 font-strong color-white"><?php echo $benfitamount; ?></label>
                                  <div class="extendedfamilyresponse"></div>
                                  <a href="#" class="genric-btn info bold-letters get-a-quote width-full azure-blue bg-white mt-3 pt-10 pb-10 uppercase" onClick="redirect()">give me a call</a>
                                  <p class="wow text-center f-14 mt-2 animated animated animated animated animated animated" style="visibility: visible;">Need assistance? We'll call you.</p>
                                </div>
                                </div>
</div>
</div>