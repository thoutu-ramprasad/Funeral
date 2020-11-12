<?php
// Inialize session
session_start();
include('products.php');
if (!isset($_SESSION['username'])) {
header('Location: index');
}else{

?>
<?php include('admin/header.php'); 
include('apiGetAllMyPolicies.php');
$xml=simplexml_load_string($result) or die("Error: Cannot create object");
$array = json_decode(json_encode($xml), TRUE);
if(count($array['PolicyList']['POLICYNUMBER']) <= 1 ){
	$results = array($array['PolicyList']['POLICYNUMBER']);
	$policyguid = array($array['PolicyList']['POLICYGUID']);
	$premium = array($array['PolicyList']['PREMIUM']);
	$arraybanks  = array($array['PolicyList']['PRODUCTPLAN']);
	$policynumber  = array($array['PolicyList']['POLICYNUMBER']);
	$inceptiondate1  = array($array['PolicyList']['INCEPTIONDATE']);
}else{
	$results = $array['PolicyList']['POLICYNUMBER'];
	$policyguid = $array['PolicyList']['POLICYGUID'];
	$premium = $array['PolicyList']['PREMIUM'];
	$arraybanks  = $array['PolicyList']['PRODUCTPLAN'];
	$policynumber  = $array['PolicyList']['POLICYNUMBER'];
	$inceptiondate1  = $array['PolicyList']['INCEPTIONDATE'];
}



?>
     
<!--panel-start-->
<div class="alert mb-0" id="alert" style="display:none;background: #F3F7FA;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12  panel-part">
    <div class="panel panel-primary" >
	<div class="col-lg-1 col-md-1 text-left1"><img src="img/Fill 71.png" alt=""></div>
	<div class="col-lg-7 col-md-7 text-left1">
	<p>There is still some outstanding information regarding your dependents. Please ensure you visit the page and update all the necessary information.</p>
	</div>
	<div class="col-lg-3 col-md-3 text-left1 p-0">
    <a href="#" class="btn btn-default color-white w-100 f-14 la-update-mydetails">UPDATE MY DETAILS</a>
	</div>
        <div class="col-lg-1 col-md-1 text-left1 la-close-icon">
            <a type="button" class="close" data-target="copyright-wrap" onClick="toggle_close()" data-dismiss="panel">
                <img src="img/close-white.png" class="la-close-i">
                <span class="sr-only">Close</span>
            </a>
        </div>
    </div>
	</div>
</div>
</div>
</div>
<!--panel-end-->
<div class="container mt-5 mb-5">
      <div class="row">
<h1 class="f-48 la-dashboard-heading color-navy">Welcome back, <?php echo $_SESSION['client_username']; ?></h1>
                                            </div>
                                            </div>
<?php 
if(count($results) > 0){
$j = 1;
for($i=0; $i<count($results); $i++){
$inception  = explode("-", $inceptiondate1[$i]);
$inceptiondate =  date("jS", strtotime($inception[2]));

$data = '{
  "InputPolicyGuid" : "'.$policyguid[$i].'"
}';

$curl = curl_init();
$token = $_SESSION['token'];
curl_setopt_array($curl, array(
CURLOPT_URL => "https://telkomtest.cloudcover.insure/apiGetPolicyDetails",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
// SET Method as a POST
curl_setopt($curl, CURLOPT_POST, 1),

// Pass user data in POST command
curl_setopt($curl, CURLOPT_POSTFIELDS,$data),
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_HTTPHEADER => array(
"Content-Type: application/json",
"Authorization: Basic $token"
),
));
$response = curl_exec($curl);
$json = json_decode($response, true);
curl_close($curl);
//echo "<pre>";
//print_r($json['api_response']['CoverRecord']);
//echo $json['api_response']['CoverRecord'][0]['COVERAMOUNT'];


?>
<!-- about_area_start  -->
<div class="accordion_thumb plus_padding mb-5" style="background: #F3F7FA;">
  <div class="container">
      <div class="row">	  		
        <div id="demo<?php echo $i; ?>" class="collapse collapse show col-lg-12 col-md-12 pb-44 bg-white p-50">
          <div class="wl-back col-lg-3 col-md-3 la-border-bottom-m">
            <p><a href="#">FUNERAL PLAN <?php echo $j++; ?></a></p>
            <h3 class="f-24 l-26 ls-m-02"><?php echo $arraybanks[$i]; ?></h3>
          </div>
          <div class="wl-back col-lg-5 col-md-5 pt-23 pl-61 la-add la-border-bottom-m la-border-lr ">
		  <p class="l-20 f-12 ls-0-1"> Add on <button type="text" value="" class="bt-name text-left family-strong l-20 f-12 pl-55 la-extended-ff">Extended Family Funeral</button></p>
  		  <p class="l-20 f-12 ls-0-1">Policy number<button type="text" value="" class="bt-no text-left"><?php echo $policynumber[$i]; ?></button></p>
		  <p class="l-20 f-12 ls-0-1">Policy holder <button type="text" value="" class="bt-no text-left">&nbsp;<?php echo $_SESSION['client_username']; ?></button></p>

          </div>
          <div class="wl-back col-lg-4 col-md-4 border-right-0 col-sm-12 col-xs-12">
		  <p class="text-right la-spacing col-sm-12 col-xs-12"><a href="#" class="f-14 l-20">Total monthly premium</a></p>

            <h2 class="text-right la-spacing col-sm-12 col-xs-12">R <?php echo $premium[$i]; ?>.00</h2>
			<p class="text-right la-spacing col-sm-12 col-xs-12" ><?php echo $inceptiondate; ?> day of every month</p>
          </div>
        </div>
	      <div class="container">
      <div class="row">	  
	  
    <div id="intro<?php echo $i; ?>" class="collapse bg-white p-50"> 
	<div class="demo1 bg-white" id="demo<?php echo $i; ?>">
		<div id="demo<?php echo $i; ?>" class="collapse collapse show col-lg-12 col-md-12 pt-l-70">
        <div class="wl-back col-lg-4 col-md-4 border-right-0">
          <p><a href="#">Your funeral plan:</a></p>
          <h4><?php echo $arraybanks[$i]; ?></h4>
          <p><a href="#">Spouse: 1</a></p>
          <p><a href="#">Children: 1</a></p>
        </div>
        <div class="wl-back col-lg-3 col-md-3 border-right-0 ">
          <p><a href="#">Cover amount</a></p>
          <h5>R70000.00</h5>
        </div>
        <div class="wl-back col-lg-5 col-md-5 border-right-0 la-monthly-pre-da">
          <p class="text-right"><a href="#">Monthly premium</a></p>
          <h5 class="text-right">R 200.00</h5>
        </div>
        <p class="text-left la-display-m"><a href="#">Your funeral plan</a></p>

		<img src="img/Line 19.png" alt="" class="img-ln">

      </div>
	  <div id="demo<?php echo $i; ?>" class="collapse collapse show col-lg-12 col-md-12">
        <h4>Extended Family Funeral </h4>
		
		<div class="wl-back col-lg-4 col-md-4 border-right-0">
          <?php $count = count($json['api_response']['CoverRecord']);
			$sum = 0;		  
			$sumpremium = 0;		  
			for($j=0;$j<$count;$j++){ 
			$sum+= $json['api_response']['CoverRecord'][$j]['COVERAMOUNT'];
			$sumpremium+= $json['api_response']['CoverRecord'][$j]['PREMIUMAMOUNT'];
			
			?>
			
          <p><a href="#"></a><?php echo $json['api_response']['CoverRecord'][$j]['INSUREDITEM']; ?></p>
			<?php } ?> 
        </div>
		
        <div class="wl-back col-lg-3 col-md-3 border-right-0">
		          <p class="la-display-m"><a href="#">Cover amount</a></p>

          <h5 class="py-5 la-space-p"><?php echo 'R'.$sum;?></h5>
        </div>
        <div class="wl-back col-lg-5 col-md-5 border-right-0 la-monthly-pre-da1">
          <p class="text-right la-display-m"><a href="#">Monthly premium</a></p>
          <h5 class="text-right py-5 la-space-p"><?php echo 'R'.$sumpremium.'.00';?></h5>
        </div>
		<img src="img/Line 19.png" alt="" class="img-ln">
     
	 </div>
	  
	  <div id="demo<?php echo $i; ?>" class="collapse collapse show col-lg-12 col-md-12">
        <div class="wl-back col-lg-12 col-md-12 text-right border-right-0">
          
          <p><a href="#" class="btn sd-details ls-0-5 azure-blue">SEE DETAILS</a></p>
		        </div>

        </div>
		    </div>
</div>
    <div class="span1 col-md-12 p-0">
        <input type="button" id="collapsible<?php echo $i; ?>" class="btn btn-primary la-view-overview collapsible" data-toggle="collapse" data-target="#intro<?php echo $i; ?>" value="view overview" style="width:100%;"></input>
    </div>
</div>
      </div>
	</div>
	</div>
	</div> 
<?php }
}else{
	echo '<div class="container mt-5 mb-5">
      <div class="row"><p class="wow text-center fadeInUp color-navy" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">Your not selected any plans. if you want <a class="color-navy font-strong" href="get-a-quote">click here.</a></p></div></div>';
} 
?>
  <div>
  
  </div>
  
  </div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
<script>
function handleClick() {
  this.value = (this.value == 'view overview' ? 'close overview' : 'view overview');
}
$(document).ready(function() {
$(".collapsible").on("click",function(){
	var id  = $(this).val();
	if(id == "view overview"){
		$(this).val("close overview");
	}else{
		$(this).val("view overview");
	}
	
	
});
});
</script>
<?php } ?>