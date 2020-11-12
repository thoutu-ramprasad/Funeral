<?php
include('header.php');
//include('products.php');
if(isset($_SESSION['json_data_one'])){
$sessionarray = $_SESSION['json_data_one'];
for($i=0;$i<count($sessionarray); $i++){
switch ($sessionarray[$i]['name']) {
case "coveramount":
  $coveramount = $sessionarray[$i]['value'];
  break;
case "title":
  $sessiontitle = $sessionarray[$i]['value'];
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
case "children":
  $childrens = $sessionarray[$i]['value'];
  break;
default:
  //echo "Your favorite color is neither red, blue, nor green!";
}
}
}

if(isset($_SESSION['json_data_three'])){
$sessionarray = $_SESSION['json_data_three'];
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
case "c_code":
	$client_address_code = $sessionarray[$i]['value'];
	break;
case "c_city":
	$client_address_city = $sessionarray[$i]['value'];
	break;
case "c_province":
	$client_address_province = $sessionarray[$i]['value'];
	break;
  case "b_relationship":
	$beneficiary_relationship = $sessionarray[$i]['value'];
	break;
  case "b_firstname":
	$beneficiary_firstname = $sessionarray[$i]['value'];
	break;
case "b_title":
	$beneficiary_title = $sessionarray[$i]['value'];
	break;
  case "b_surname":
	$beneficiary_surname = $sessionarray[$i]['value'];
	break;
  case "b_idnumber":
	$beneficiary_idnumber = $sessionarray[$i]['value'];
  $b_year = substr($beneficiary_idnumber, 0,2);
	$b_currentYear = date("Y") % 100;
	$prefix = "19";
	if ($b_year < $b_currentYear)
	$prefix = "20";
	$b_id_year = $prefix.$b_year;
	$b_year = date("Y");
	$b_age = $b_year - $b_id_year;

	$b_id_month = substr($beneficiary_idnumber, 2,2);
	$b_id_date = substr($beneficiary_idnumber, 4,2);
	$b_fullDate1 = $b_id_year. "/" . $b_id_month. "/" . $b_id_date;
	$b_num_array = str_split($beneficiary_idnumber);
	$b_id_gender = $b_num_array[6] >= 5 ? 'male' : 'female';
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
  default:
	//echo "Your favorite color is neither red, blue, nor green!";
}
}
}

if(isset($_SESSION['json_data_four'])){
$sessionarray = $_SESSION['json_data_four'];
for($i=0;$i<count($sessionarray); $i++){
switch ($sessionarray[$i]['name']) {
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
default:
  //echo "Your favorite color is neither red, blue, nor green!";
}
}
}

if(isset($_SESSION['json_data_five'])){
$sessionarray = $_SESSION['json_data_five'];
for($i=0;$i<count($sessionarray); $i++){
switch ($sessionarray[$i]['name']) {
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








?>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content rounded-0">
  <div class="modal-header border-0">
	<button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
	<img src="img/Fill 67.png" class="w-36 h-36">
	</button>
  </div>
  <header>
	<div class="container text-center">
	  <h4 class="f-34 l-36 l-s-m-2 blue-gray mb-3">Choose funeral cover for your specific needs.</h4>
	  <p class="select-plan">Visit our portal or speak to our friendly call centre agents to decide on the funeral cover that’s right for you. </p>
	</div>
  </header>
  <div class="container-fluid">
	<div class="row">
	  <div class="col-md-3 col-sm-3 col-xs-3">
		<div class="text-center pb-4 pt-4 box2">
		  <img src="img/Vector4.png" class=" pl-2 pt-2 w-88 cursor-default" alt="...">
		  <p class="boxheadding1 mt-4"><a href="javascript:void(0)"><?php echo "One"; ?></a></p>
		  <p class="lasttext1 pb-4">Cover for immediate family members.</p>
		</div>
	  </div>
	  <div class="col-md-3 col-md-3 col-sm-3 col-xs-3 ">
		<div class="text-center pb-4 pt-4 box2">
		  <img src="img/Vector5.png" class=" pl-2 pt-2 w-88 cursor-default" alt="...">
		  <p class="boxheadding1 mt-4"><a href="javascript:void(0)" ><?php echo "two"; ?></a></p>
		  <p class="lasttext1">Funeral cover designed around the needs of the main member only.</p>
		</div>
	  </div>
	  <div class="col-md-3 col-sm-3 col-xs-3 ">
		<div class="text-center pb-4 pt-4 box2">
		  <img src="img/Vector7.png" class=" pl-2 pt-2 w-88 cursor-default" alt="...">       
		  <p class="boxheadding1  mt-4"><a href="javascript:void(0)" ><?php echo "three"; ?></a></p>
		  <p class="lasttext1">Funeral Cover for the main member and their spouse. </p>
		</div>
	  </div>
	  <div class="col-md-3 col-sm-3 col-xs-3">
		<div class="text-center pb-4 pt-4 box2">
		  <img src="img/Vector7.png" class=" pl-2 pt-2 w-88 cursor-default" alt="...">
		  <p class="boxheadding1 mt-4"><a href="javascript:void(0)"><?php echo "four"; ?></a></p>
		  <p class="lasttext1">Funeral Cover for the main member and their child.  </p>
		</div>
	  </div>
	</div>
	<div >
	  <div class="text-left"><img src="img/line.png" alt=""></div>
	  <div class="text-left"><img src="img/Fill86.png" alt="" class="img1"></div>
	  <div class="text-right"><img src="img/line.png" alt=""></div>
	</div>
	<div>
	  <section class="divider mb-5">
		<div class="container">
		  <div class="row">
			<div class="col-lg-12 col-md-12">
			  <div class="main-divider">
				<img src="img/Add.png" alt="" width="20">
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  <footer>
		<div class="well well-lg">
		  <h6 class="f-18 l-31 l-s-m-1 azure-blue text-center font-strong">Extended Family Funeral Add on</h6>
		</div>
		<p class="lasttext1 text-center f-16 l-24 l-s-m-02 blue-gray mb-83">The extended member option can be added to any funeral package.</p>
	  </footer>
	</div>
  </div>
</div>
</div>
</div>
<!-- header-end -->
<!-- apply_form_area -->
<div class="form-container"></div>
<div class="sessionvalues"></div>
<div class="sessionvalues_family"></div>
<div class="apply_form_area bg-blue">
<div class="container getquote">
<div id="demo">
  <?php
	if(isset($_SESSION['json_data_six'])){ ?>
  <div class="card failedresponse color-white font-strong p-3 mb-3 border-0 bg-indianred"><?php echo $failedresponse; ?></div>
  <?php } ?>
  <div class="step-app">
	<ul class="step-steps la-display-d">
	  <li><a href="#tab1"><span class="number">01</span> Start my quote</a></li>
	  <li><a href="#tab2"><span class="number">02</span> Quote details</a></li>
	  <li><a href="#tab3"><span class="number">03</span> Personal details</a></li>
	  <li><a href="#tab4"><span class="number">04</span> Dependent/s details</a></li>
	  <li><a href="#tab5"><span class="number">05</span> Quote summary</a></li>
	  <li><a href="#tab6"><span class="number">06</span> Payment</a></li>
	</ul>
	<div class="step-content p-0">
	  <div class="step-tab-panel" id="tab1">
		<form method="post" name="frmOne" id="frmOne">
		  <div class="panel-heading mt-5">
			<h3 class="panel-title f-48 l-52 color-navy ls-0-minus-2">Get a funeral plan that<br>suits your needs</h3>
			<p class="f-24 l-32 ls-0-1 blue-gray mt-5">Start your quote</p>
			<h6 class="f-16 lh-23 ls-0-5 uppercase blue-gray mt-5">Select your funeral plan</h6>
			<a href="javascript:void(0);" class="f-12 l-20 gray ls-0-1 blue font-strong" data-toggle="modal" data-target="#exampleModalCenter">Want to know a bit more?</a>
		  </div>
		  <div class="grid mt-5 mb-5 la-display-d">
			<label class="card">
			  <input name="plan-desk" class="radiobutton plan plan-desk" type="radio" data-name="planA" value="<?php echo "One"; ?>" data-id="Telkom Funeral A" id="<?php echo "oneplan"; ?>">
			  <span class="plan-details">
				<img src="img/member-children.png" class="pl-2 pt-2 m-auto cursor-default" alt="...">
				<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "One"; ?></span></p>
				<p class="lasttext">Cover for immediate family members.</p>
			  </span>
			</label>
			<label class="card">
			  <input name="plan-desk" class="radiobutton plan plan-desk" type="radio" data-name="planB" data-id="Telkom Funeral B" value="<?php echo "two"; ?>" id="<?php echo "twoplan"; ?>">
			  <span class="hidden-visually">Pro - $50 per month, 5 team members, 500 GB per month, 5 concurrent builds</span>
			  <span class="plan-details" aria-hidden="true">
				<img src="img/family.png" class=" pl-2 pt-2 m-auto cursor-default" alt="...">
				<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "two"; ?></span></p>
				<p class="lasttext">Funeral cover designed around the needs of the main member only.</p>
			  </span>
			</label>
			<label class="card">
			  <input name="plan-desk" class="radiobutton plan plan-desk" type="radio" data-name="planC" data-id="Telkom Funeral C" value="<?php echo "three"; ?>" id="<?php echo "threeplan"; ?>">
			  <span class="hidden-visually">Business - $200 per month, 5+ team members, 1000 GB per month, Unlimited builds</span>
			  <span class="plan-details" aria-hidden="true">
				<img src="img/mainmember.png" class=" pl-2 pt-2 m-auto cursor-default" alt="...">
				<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "three"; ?></span></p>
				<p class="lasttext">Funeral Cover for the main member and their spouse. </p>
			  </span>
			</label>
			<label class="card">
			  <input name="plan-desk" class="radiobutton plan plan-desk" type="radio" data-name="planD" data-id="Telkom Funeral D" value="<?php echo "four"; ?>" id="<?php echo "fourlan"; ?>">
			  <span class="hidden-visually">Business - $200 per month, 5+ team members, 1000 GB per month, Unlimited builds</span>
			  <span class="plan-details" aria-hidden="true">
				<img src="img/member-spouse.png" class=" pl-2 pt-2 m-auto cursor-default" alt="...">
				<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "four"; ?></span></p>
				<p class="lasttext">Funeral Cover for the main member and their child.</p>
			  </span>
			</label>
			<div class="error_plan_desk"></div>
		  </div>
		  <div class="la-display-m mb-5">
			<div class="container my-4 p-0">
			  <hr class="my-4">
			  <!--Carousel Wrapper-->
			  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
				<!--Controls-->
				<!--      <div class="controls-top">
				  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
				  </div>-->
				<!--/.Controls-->
				<!--Indicators-->
				<ol class="carousel-indicators">
				  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
				  <li data-target="#multi-item-example" data-slide-to="1"></li>
				  <li data-target="#multi-item-example" data-slide-to="2"></li>
				  <li data-target="#multi-item-example" data-slide-to="3"></li>
				</ol>
				<!--/.Indicators-->
				<!--Slides-->
				<div class="carousel-inner" role="listbox">
				  <!--First slide-->
				  <div class="carousel-item active">
					<div class="row">
					  <div class="col-md-12">
						<label class="card">
						  <input name="plan" class="radiobutton plan plan-mobile" type="radio" data-name="planA" value="<?php echo "One"; ?>" data-id="Telkom Funeral A" id="<?php echo "oneplan"; ?>">
						  <span class="plan-details">
							<img src="img/member-children.png" class="pl-2 pt-2 m-auto cursor-default" alt="...">
							<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "One"; ?></span></p>
							<p class="lasttext">Cover for immediate family members.</p>
						  </span>
						</label>
					  </div>
					</div>
				  </div>
				  <!--/.First slide-->
				  <!--Second slide-->
				  <div class="carousel-item">
					<div class="row">
					  <div class="col-md-12">
						<label class="card">
						  <input name="plan" class="radiobutton plan plan-mobile" type="radio" data-name="planB" data-id="Telkom Funeral B" value="<?php echo "two"; ?>" id="<?php echo "twoplan"; ?>">
						  <span class="hidden-visually">Pro - $50 per month, 5 team members, 500 GB per month, 5 concurrent builds</span>
						  <span class="plan-details" aria-hidden="true">
							<img src="img/family.png" class=" pl-2 pt-2 m-auto cursor-default" alt="...">
							<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "two"; ?></span></p>
							<p class="lasttext">Funeral cover designed around the needs of the main member only.</p>
						  </span>
						</label>
					  </div>
					</div>
				  </div>
				  <!--/.Second slide-->
				  <!--Third slide-->
				  <div class="carousel-item">
					<div class="row">
					  <div class="col-md-12">
						<label class="card">
						  <input name="plan" class="radiobutton plan plan-mobile" type="radio" data-name="planC" data-id="Telkom Funeral C" value="<?php echo "three"; ?>" id="<?php echo "threeplan"; ?>">
						  <span class="hidden-visually">Business - $200 per month, 5+ team members, 1000 GB per month, Unlimited builds</span>
						  <span class="plan-details" aria-hidden="true">
							<img src="img/mainmember.png" class=" pl-2 pt-2 m-auto cursor-default" alt="...">
							<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "three"; ?></span></p>
							<p class="lasttext">Funeral Cover for the main member and their spouse. </p>
						  </span>
						</label>
					  </div>
					</div>
				  </div>
				  <!--/.Third slide-->
				  <div class="carousel-item">
					<div class="row">
					  <div class="col-md-12">
						<label class="card">
						  <input name="plan" class="radiobutton plan plan-mobile" type="radio" data-name="planD" data-id="Telkom Funeral D" value="<?php echo "four"; ?>" id="<?php echo "fourlan"; ?>">
						  <span class="hidden-visually">Business - $200 per month, 5+ team members, 1000 GB per month, Unlimited builds</span>
						  <span class="plan-details" aria-hidden="true">
							<img src="img/member-spouse.png" class=" pl-2 pt-2 m-auto cursor-default" alt="...">
							<p class="boxheadding mb-4 mt-4 text-center"><span class="l-s-m-02 color-blue-gredient"><?php echo "four"; ?></span></p>
							<p class="lasttext">Funeral Cover for the main member and their child.</p>
						  </span>
						</label>
					  </div>
					</div>
					<!--/.Slides-->
				  </div>
				  <!--/.Carousel Wrapper-->
				</div>
			  </div>
			</div>
		  </div>
		  <div class="bs-example">
			<div class="accordion row" id="accordionExample">
			  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="headingOne">
				<div class="row bg-blue-gredient p-10 border-5x res-summary records_content mt-3 mb-4 la-display-m">
				  <div class="col-12 mt-3">
					<div class="bg"></div>
				  </div>
				  <div class="col-12 la-display-m p-0" style="margin-right:-20px;">
					<div class="card-header" data-toggle="collapse" data-target="#collapseOne" id="headingOne">
					  <h2 class="text-left f-24 l-36 ls-minus-2 color-white res-summary">Your policy summary</h2>
					  <h2 class="mb-0 la-button-add">
						<button type="button" class="btn btn-link " style="width:50px;"><img src="img/Add-white.png"></button>									
					  </h2>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					  <div class="card-body">
						<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
						  <div class="bg-policy">
							<!-- Button trigger modal -->
							<button type="button" class="w-100">
							<img src="img/Fill85.png" class="center mt-5" style="width:70px;height: 70px;">
							</button>
							<p class="you-have1 mt-3">You have not yet selected a policy</p>
							<p class="build" style="padding-bottom:60px;text-align:center;">Build your quote by selecting a funeral plan that suits your needs.</p>
							<button class="btn callme-back col-md-11 col-sm-12 col-xs-12 uppercase azure-blue f-14 l-20 ls-0-5" onClick="redirect()">Call me back</button>
							<p class="text-light text-center assistance mt-3 pb-4">Need assistance? We’ll call you.</p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				  <div class="card-body"> </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row mt-3">
			<div class="col-md-8 col-sm-6 col-xs-12">
			  <p class="cover f-16 l-23 ls-0-5 blue-gray uppercase">How much cover would you like?</p>
			  <section class="radio">
				<div class="pl-0">
				  <input type="radio" id="control_01" required class="benefittype" name="coveramount" data-name="R10" value="Telkom Funeral A"<?php echo $coveramount == 'Telkom Funeral A' ? ' checked="checked"' : '';?>> 
				  <label class="radio border-3x border-1-blue-gray" for="control_01">
					<h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2>
				  </label>
				</div>
				<div class="pl-0">
				  <input type="radio" id="control_02" required class="benefittype" name="coveramount" data-name="R20" value="Telkom Funeral B"<?php echo $coveramount == 'Telkom Funeral B' ? ' checked="checked"' : '';?>> 
				  <label class="radio border-3x border-1-blue-gray" for="control_02">
					<h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2>
				  </label>
				</div>
				<div class="pl-0">
				  <input type="radio" id="control_03" required class="benefittype" name="coveramount" data-name="R30" value="Telkom Funeral C"<?php echo $coveramount == 'Telkom Funeral C' ? ' checked="checked"' : '';?>> 
				  <label class="radio border-3x border-1-blue-gray" for="control_03">
					<h2 class="f-10 l-15 uppercase blue-gray m-0">R 30 000</h2>
				  </label>
				</div>
				<div class="pl-0">
				  <input type="radio" id="control_04" required class="benefittype" name="coveramount" data-name="R50" value="Telkom Funeral D" <?php echo $coveramount == 'Telkom Funeral D' ? ' checked="checked"' : '';?>> 
				  <label class="radio border-3x border-1-blue-gray" for="control_04">
					<h2 class="f-10 l-15 uppercase blue-gray m-0">R 50 000</h2>
				  </label>
				</div>
				<div class="pl-0">
				  <input type="radio" id="control_05" required class="benefittype" name="coveramount" data-name="R70" value="Telkom Funeral E" <?php echo $coveramount == 'Telkom Funeral E' ? ' checked="checked"' : '';?>> 
				  <label class="radio border-3x border-1-blue-gray" for="control_05">
					<h2 class="f-10 l-15 uppercase blue-gray m-0">R 70 000</h2>
				  </label>
				</div>
			  </section>
			  <div class="error_coveramount"></div>
			  <div class="mt-4">
				<div class="row mt-3">
				  <div class="col-lg-4">
					<div class="wide">
					  <label class="left f-12 l-17 m-0 color-grey ">Title</label>
					  <div class="default-select title" id="default-select">
						<select name="title" id="title">
						  <option value="">Select type</option>
						  
						</select>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
				  </div>
				</div>
				<div class="row mt-3">
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide form-group field">
						<label class="left f-12 l-17  m-0 color-grey">Full name<span class="ml-2 color-red">*</span></label>
						<input type="text" name="fname" id="txtName" required="required" autocomplete="off"  placeholder="First Name" class="single-input p-0 transparent-input" data-error="Please enter your full name." value="<?php echo isset($firstname) ? $firstname : ''; ?><?php echo isset($_SESSION['client_username']) ? $_SESSION['client_username'] : ''; ?>">
						<div class="error_fname"></div>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide form-group">
						<label class="left f-12 l-17  m-0 color-grey">Surname</label>
						<input type="text" name="surname" required="required" id="surname" autocomplete="off"  placeholder="Last Name" class="single-input p-0 transparent-input" value="<?php echo isset($surname) ? $surname : ''; ?>">
						<div class="error_surname"></div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row mt-3">
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide form-group field">
						<label class="left f-12 l-17  m-0 color-grey">Contact number</label>
						<input type="number" name="cnumber" id="cnumber" required="required" autocomplete="off"  placeholder="Contact number" class="single-input p-0 transparent-input" value="<?php echo isset($cnumber) ? $cnumber : ''; ?>">
						<div class="error_cnumber"></div>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
					<div class="wide">
					  <label class="left f-12 l-17 m-0 color-grey ">Monthly income</label>
					  <div class="default-select title" id="default-select">
						<select name="income" id="income" >
						  <option value="">Select income</option>
						  <option value="R10 000.00"<?php echo $income == 'R10 000.00' ? ' selected="selected"' : '';?>>R10 000.00</option>
						  <option value="R20 000.00"<?php echo $income == 'R20 000.00' ? ' selected="selected"' : '';?>>R20 000.00</option>
						  <option value="R30 000.00"<?php echo $income == 'R30 000.00' ? ' selected="selected"' : '';?>>R30 000.00</option>
						  <option value="R50 000.00"<?php echo $income == 'R50 000.00' ? ' selected="selected"' : '';?>>R50 000.00</option>
						  <option value="R70 000.00"<?php echo $income == 'R70 000.00' ? ' selected="selected"' : '';?>>R70 000.00</option>
						</select>
						<div class="error_income"></div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row mt-3 childrens">
				  <div class="col-lg-4">
					<div class="wide">
					  <label class="left f-12 l-17 m-0 color-grey ">Number of Children</label>
					  <div class="default-select title" id="default-select">
						<select name="children" id="children" onChange="setChildren( this.value )">
						  <option value="">Select Children</option>
						  <option value="1"<?php echo $childrens == '1' ? ' selected="selected"' : '';?>>1</option>
						  <option value="2"<?php echo $childrens == '2' ? ' selected="selected"' : '';?>>2</option>
						  <option value="3"<?php echo $childrens == '3' ? ' selected="selected"' : '';?>>3</option>
						  <option value="4"<?php echo $childrens == '4' ? ' selected="selected"' : '';?>>4</option>
						  <option value="5"<?php echo $childrens == '5' ? ' selected="selected"' : '';?>>5</option>
						</select>
						<div class="error_children"></div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-8 col-sm-12">
				  <div class="button-group-area mt-5">
					<!-- <a href="javascript:void(0)" id="confirm" class="genric-btn success-border large w-50 bg-azure-blue nextBtn color-white border-3x mb-3 uppercase ls-0-5 font-strong">Confirm</a> -->
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 records_content la-display-d">
			  <div class="bg-policy bg-blue-gredient">
				<p class="your-policy text-light text-center" style="font-size: 22px;line-height: 36px;letter-spacing: -2px;">Your policy summary</p>
				<!-- Button trigger modal -->
				<button type="button" class="w-100">
				<img src="img/Fill85.png" class="center mt-5" style="width:70px;height: 70px;">
				</button>
				<p class="you-have1 mt-3">You have not yet selected a policy</p>
				<p class="build" style="padding-bottom:60px;text-align:center;">Build your quote by selecting a funeral plan that suits your needs.</p>
				<button class="btn callme-back col-md-11 col-sm-12 col-xs-12 uppercase azure-blue f-14 l-20 ls-0-5" onClick="redirect()">Call me back</button>
				<p class="text-light text-center assistance mt-3 pb-4">Need assistance? We’ll call you.</p>
			  </div>
			</div>
		  </div>
		</form>
	  </div>
	  <div class="step-tab-panel" id="tab2">
		<div class="panel-heading mt-5">
		  <div class="la-pagination la-display-m mb-5">
			<div class="container">
			  <div class="row">
				<ul class="pagination pg-blue col-12 p-0">
				  <li class="page-item col-7 p-0">
					<a href="javascript:void(0)" class="page-link la-page-l" aria-label="Previous">
					  <span aria-hidden="true">
						<!--&laquo;--><img src="img/icn_arrow_left_10-blue.png"> 02 
					  </span>
					  <span class="sr-only">Previous</span>
					</a>
					<span class="uppercase f-14 l-20 ls-0-5">Quote details</span>
				  </li>
				  <li class="page-item col-5 p-0">
					<a class="page-link la-page-l" aria-label="Next">
					  <span aria-hidden="true">
						step 2 of 6 <img src="img/icn_arrow_right_10-blue.png"> <!--&raquo;-->
					  </span>
					  <span class="sr-only">Next</span>
					</a>
				  </li>
				</ul>
			  </div>
			</div>
		  </div>
		  <h3 class="panel-title f-48 l-52 color-navy ls-0-minus-2">Here’s your quote <?php if(isset($_SESSION['client_username'])){ echo ", ".$_SESSION['client_username']; } ?></h3>
		  <?php //include('apiGetTelkomFuneralQuote.php'); ?>
		  <div class="row">
			<div class="col-sm-8">
			  <p class="f-16 blue-gray mt-5 l-23 mb-0">You and your family will get</p>
			  <p class="f-12 gray">Spouse and up to 8 children</p>
			  <div class="response_plan"></div>
			  <?php 
				if(isset($_SESSION['json_data_firstname'])){
				  $sessionfamilyarray = $_SESSION['json_data_firstname'];
				  $sessionfamilymembertitlearray = $_SESSION['familymembertitle'];
				  for($i=0;$i< count($sessionfamilyarray); $i++){
					switch ($sessionfamilyarray[$i]['name']) {
					  case "firstname":
						$firstname = $sessionfamilyarray[$i]['value'];
						break;
				case "familymembertitle":
						$familymembertitle = $sessionfamilymembertitlearray[$i]['value'];
						break;
					  
						default:
					}
				echo '<hr class="mt-5 border-top-columbia-blue mb-4"> <p class="f-24 blue-gray mt-1 l-32">Add your extended family to your plan.</p>
					<p class="f-12 blue-gray mt-0 l-20 mb-0 lh-20 ls-0-1">Plan ahead for your family s future, and add them to your plan.</p>
					<p class="f-12 gray mt-0 l-32 lh-20 ls-0-14">You can add up to 14 extended family members.</p>
					<p class="uppercase f-16 l-23 ls-0-5 blue-gray mt-3">'.$firstname.' will get</p>
					<div class="row">
						<div class="container">
							<div class="col-6 pl-0">
							<span class="current">R10 000.00</span>
							</div>
							<div class="col-6"></div>
						</div>
					</div>
					<div class="w-100 mt-2">
						<p class="f-24 l-32 ls-0-minus-2 blue-gray w-100">worth of cover for <b class="family-strong blue-gray">R 75.00</b> per month.</p>
						<div class="azure-blue"><a href="javascript:void(0)"><span class="azure-blue f-14 l-20 ls-0-5 uppercase mr-2 family-strong">Edit</span></a> | <a href="javascript:void(0)"><span class=" ml-2 azure-blue f-14 l-20 ls-0-5 uppercase family-strong remove_family_member">Remove</span></a></div>
					</div>';
				  }
				  
					
				
				}
				  
				
				?>
			  <form method="post" name="frmSecond" id="frmSecond">
				<div class="input_fields_wrap"></div>
			  </form>
			  <div class="addextend" style="display:none">
				<hr class="mt-5 border-top-columbia-blue mb-4">
				<p class="f-24 blue-gray mt-1 l-32">Add your extended family to your plan.</p>
				<p class="f-12 blue-gray mt-0 l-20 mb-0 lh-20 ls-0-1">Plan ahead for your family's future, and add them to your plan.</p>
				<p class="f-12 gray mt-0 l-32 lh-20 ls-0-14">You can add up to 14 extended family members.</p>
				<p class="uppercase f-16 l-23 ls-0-5 blue-gray mt-3">John will get</p>
				<div class="row">
				  <div class="container">
					<div class="col-6 pl-0">
					  <div class="default-select" id="default-select">
						<select>
						  <option value="1">R 10 000</option>
						  <option value="1">R 20 000</option>
						  <option value="1">R 30 000</option>
						  <option value="1">R 50 000</option>
						  <option value="1">R 70 000</option>
						</select>
					  </div>
					</div>
					<div class="col-6"></div>
				  </div>
				</div>
				<div class="w-100 mt-2">
				  <p class="f-24 l-32 ls-0-minus-2 blue-gray w-100">worth of cover for <b class="family-strong blue-gray">R 75.00</b> per month.</p>
				  <div class="azure-blue"><a href="javascript:void(0)"><span class="azure-blue f-14 l-20 ls-0-5 uppercase mr-2 family-strong">Edit</span></a> | <a href="javascript:void(0)"><span class=" ml-2 azure-blue f-14 l-20 ls-0-5 uppercase family-strong">Remove</span></a></div>
				</div>
			  </div>
			  <div class="container input-group mb-1 mt-5">
				<input type="text" class="events-none form-control border-right-none border-blue pl-15 pb-20 pt-15 f-18 blue-gray" placeholder="Add extended Family Funeral" aria-label="Add extended Family Funeral" aria-describedby="basic-addon2">
				<div class="input-group-append">
				  <span class="input-group-text bg-none border-blue pl-15 pb-15 pt-15 bg-white" id="basic-addon2"><a href="javascript:void(0)" class="f-16 azure-blue l-26 font-strong hover-white add_field_button">Add</a></span>
				</div>
			  </div>
			  <p class="container f-12 l-20 gray ls-0-1 p-0">You can still add 13 extended family members.</p>
			</div>
			<?php include('policy-summary-desk.php'); ?>
			<?php include('policy-summary-mobile.php'); ?>
		  </div>
		</div>
	  </div>
	  <div class="step-tab-panel" id="tab3">
		<form method="post" name="frmThird" id="frmThird">
		  <div class="panel-body mt-5">
			<?php //include('apiGetTelkomFuneralQuote.php'); ?>
			<?php //include('apilisttitles.php'); ?>
			<div class="la-pagination la-display-m mb-5">
			  <div class="container">
				<div class="row">
				  <ul class="pagination pg-blue col-12 p-0">
					<li class="page-item col-7 p-0">
					  <a href="javascript:void(0)" class="page-link la-page-l uppercase" aria-label="Previous">
						<span aria-hidden="true">
						  <!--&laquo;--><img src="img/icn_arrow_left_10-blue.png"> 03 
						</span>
						<span class="sr-only">Previous</span>
					  </a>
					  <span class="uppercase f-14 l-20 ls-0-5">Personal details</span>
					</li>
					<li class="page-item col-5 p-0">
					  <a class="page-link la-page-l" aria-label="Next">
						<span aria-hidden="true">
						  step 3 of 6 <img src="img/icn_arrow_right_10-blue.png"> <!--&raquo;-->
						</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-8 col-sm-12">
				<div class="content">
				  <div class="tool">
					<h3 class="tooltip--triangle panel-title f-48 l-52 color-navy ls-0-minus-2">Your personal details</h3>
					<div class="tooltip">
					  <div class="row">
						<div class="col-md-2 mt-2">
						  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.5231 16.2059C4.29272 16.2059 0.863525 12.7767 0.863525 8.54629C0.863525 4.31591 4.29272 0.886719 8.5231 0.886719C12.7535 0.886719 16.1827 4.31591 16.1827 8.54629C16.1827 12.7767 12.7535 16.2059 8.5231 16.2059ZM8.52319 0.121094C3.87 0.121094 0.0976562 3.89382 0.0976562 8.54663C0.0976562 13.1998 3.87 16.9722 8.52319 16.9722C13.1764 16.9722 16.9487 13.1998 16.9487 8.54663C16.9487 3.89382 13.1764 0.121094 8.52319 0.121094ZM9.36131 4.33057C9.06412 4.33057 8.80906 4.42669 8.5965 4.61933C8.38357 4.81197 8.2771 5.04367 8.2771 5.31482C8.2771 5.58597 8.38357 5.81652 8.5965 6.00725C8.80906 6.19797 9.06412 6.29333 9.36131 6.29333C9.6585 6.29333 9.9128 6.19797 10.1238 6.00725C10.3345 5.81652 10.4402 5.58597 10.4402 5.31482C10.4402 5.04367 10.3345 4.81197 10.1238 4.61933C9.9128 4.42669 9.6585 4.33057 9.36131 4.33057ZM9.64831 12.0002C9.41393 12.0002 9.24886 11.9626 9.1535 11.8876C9.05814 11.8125 9.01065 11.672 9.01065 11.4652C9.01065 11.3828 9.02559 11.2618 9.05508 11.1013C9.08418 10.9412 9.1175 10.7984 9.15427 10.6735L9.60695 9.11711C9.65099 8.97464 9.68125 8.81762 9.69772 8.64681C9.71418 8.47524 9.72261 8.35613 9.72261 8.28796C9.72261 7.96013 9.60389 7.69358 9.3672 7.4883C9.13014 7.28341 8.79312 7.18115 8.35614 7.18115C8.11372 7.18115 7.85635 7.2229 7.58444 7.30677C7.31252 7.39026 7.02797 7.49136 6.7304 7.60894L6.60938 8.09034C6.69746 8.05817 6.80316 8.02447 6.92686 7.98847C7.0498 7.95285 7.17044 7.93524 7.28801 7.93524C7.52737 7.93524 7.68899 7.97468 7.77363 8.05281C7.85827 8.13132 7.90078 8.27034 7.90078 8.47026C7.90078 8.58056 7.88699 8.70273 7.85942 8.83639C7.83184 8.96966 7.79776 9.11213 7.75716 9.26149L7.30257 10.8233C7.26235 10.9872 7.23286 11.1346 7.21448 11.2649C7.19648 11.3943 7.18729 11.5222 7.18729 11.6471C7.18729 11.968 7.30908 12.2326 7.55303 12.4414C7.79699 12.6497 8.13937 12.7539 8.57942 12.7539C8.86589 12.7539 9.11712 12.7175 9.3335 12.6443C9.55027 12.5716 9.8398 12.4651 10.2032 12.3261L10.3243 11.8447C10.2622 11.8734 10.1611 11.906 10.0221 11.9439C9.88269 11.9814 9.75823 12.0002 9.64831 12.0002Z" fill="#008FE0"/>
						  </svg>
						</div>
						<div class="col-md-10">
						  <p class="azure-blue f-12 l-20 ls-0-1">This is where we can give a helpful tip on how to get the most out of our services. </p>
						</div>
					  </div>
					</div>
				  </div>
				  <h6 class="f-16 lh-23 ls-0-5 uppercase blue-gray mt-5">WE NEED A FEW MORE DETAILS</h6>
				  <p class="f-12 lh-20 ls-0-1 gray">We'll keep all your information safe and won't share it with anyone.</p>
				  <p class="f-12 l-17 gray mt-4 mb-0">Do you intend on replacing any existing funeral cover with this cover?</p>
				  <p class="f-12 l-20 gray ls-0-1">what is this?</p>
				  <div class="button-group-area">
					<a href="javascript:void(0)" class="genric-btn border-gray large py-0 rounded w-25 font-strong border-15x color-gray">Yes</a>
					<a href="javascript:void(0)" class="genric-btn btn-outline-primary py-0 border-gray w-25 font-strong border-3x color-gray">No</a>
				  </div>
				</div>
				<?php include('policy-summary-mobile.php'); ?>
				<div class="form mb-4">
				  <div class="row">
					<div class="col-lg-3">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17 m-0 color-grey mt-4">Title</label>
						<div class="default-select title" id="default-select">
						  <select name="c_title" id="c_title">
							<option value="">Select Type</option>
							
						  </select>
						</div>
						<div class="error_ctitle"></div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Full name</label><input type="text" id="c_firstname" name="c_firstname" autocomplete="off" required="required" placeholder="Full Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'FullName'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_firstname) ? $client_firstname : ''; ?>">
						</div>
						<div class="error_cfname"></div>
					  </div>
					</div>
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17  m-0 color-grey mt-4">Surname</label>
						  <input type="text" name="c_surname" id="c_surname" autocomplete="off" placeholder="Surname" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Surname'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_surname) ? $client_surname : ''; ?>">
						</div>
						<div class="error_csurname"></div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="single_input">
						  <div class="mt-10 wide">
							<label class="left f-12 l-17 m-0 color-grey mt-4">ID Number</label><input type="number" id="c_idnumber" name="c_idnumber" autocomplete="off" placeholder="eg.961008005008" maxlength="13" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'IDNumber'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_idnumber) ? $client_idnumber : ''; ?>">
						  </div>
						  <div class="error_cidnumber"></div>
						</div>
					  </div>
					</div>
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17  m-0 color-grey mt-4 pl-0">Marital Status</label>  
						  <div class="default-select  title" id="default-select">
							<select name="c_marital" id="c_marital">
							  <option value="single"<?php echo $client_marital == 'single' ? ' selected="selected"' : '';?>>Single</option>
							  <option value="married"<?php echo $client_marital == 'married' ? ' selected="selected"' : '';?>>Married</option>
							  <option value="widow"<?php echo $client_marital == 'widow' ? ' selected="selected"' : '';?>>Widow</option>
							</select>
						  </div>
						  <div class="error_cmaritalstatus"></div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Cell phone number</label><input type="number" id="c_contactnumber" name="c_contactnumber" autocomplete="off" placeholder="082 722 9389" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Contact Number'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_contactnumber) ? $client_contactnumber : ''; ?>">
						</div>
						<div class="error_cphonenumber"></div>
					  </div>
					</div>
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Email Address</label><input type="email" id="c_email" name="c_email" autocomplete="off" placeholder="eg. stefan@yourmail.com" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Email Address'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_email) ? $client_email : ''; ?>">
						</div>
						<div class="error_cemail"></div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-12 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4" for="addres">Address</label><input type="text" id="c_address" name="c_address" list="addresses" id="autoComplete" autocomplete="off" placeholder="Start typing" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Start typing'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_address) ? $client_address : ''; ?>">
						</div>
						<div class="error_caddress"></div>
						<div id="listitems" style='display:none'>
						  <div class="row">
							<div class="col-lg-6 mt-4">
							  <div class="single_input">
								<div class="mt-10 wide">
								  <label class="left f-12 l-17 m-0 color-grey mt-4">City</label><input type="text" name="c_city" id="c_city" autocomplete="off" placeholder="City" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'City'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_city) ? $client_city : ''; ?>">
								</div>
							  </div>
							</div>
							<div class="col-lg-6 mt-4">
							  <div class="single_input">
								<div class="mt-10 wide">
								  <label class="left f-12 l-17  m-0 color-grey mt-4">Province</label><input type="text" id="c_province" name="c_province" autocomplete="off" placeholder="Province" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Province'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_province) ? $client_province : ''; ?>">
								</div>
							  </div>
							</div>
						  </div>
						  <div class="row">
							<div class="col-lg-6 mt-4">
							  <div class="single_input">
								<div class="mt-10 wide">
								  <label class="left f-12 l-17  m-0 color-grey mt-4">Code</label><input type="text" name="c_code" id="c_code" autocomplete="off" placeholder="Code" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Code'"  class="single-input p-0 transparent-input" value="<?php echo isset($client_code) ? $client_code : ''; ?>">
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="my-3">
					<hr class="mt-73 border-top-columbia-blue">
					<h6 class='blue-gray f-16 lh-23 ls-0-5 uppercase '>ADD A BENEFICIARY</h6>
					<small class='color-grey lh-20 f-12 l-s-m-1'>This is the person who will receive your funeral cover payout.</small>
				  </div>
				  <div class="row">
					<div class="col-md-9">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17 m-0 color-grey mt-4">Beneficiart relationship</label>
						<div class="col-sm-5 pl-0">
						  <div class="default-select  title" id="default-select">
							<select name="b_relationship" id="b_relationship">
							  <option value="">Select Type</option>
							  <?php 
								foreach($relationshiparray as $relationship){ ?>
							  <option value="<?php echo $relationship; ?>"<?php echo $relationship == $beneficiary_relationship ? ' selected="selected"' : '';?>><?php echo $relationship; ?></option>
							  <?php } ?>
							</select>
							<div class="error_brelation"></div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-3">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17 m-0 color-grey mt-4">Title</label>
						<div class="default-select title" id="default-select">
						  <select name="b_title" id="b_title">
							<option value="">Select Type</option>
							
						  </select>
						</div>
						<div class="error_ctitle"></div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Full name</label><input type="text" id="b_firstname" name="b_firstname" autocomplete="off" placeholder="Full Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'FullName'"  class="single-input p-0 transparent-input" value="<?php echo isset($beneficiary_firstname) ? $beneficiary_firstname : ''; ?>">
						</div>
						<div class="error_bfname"></div>
					  </div>
					</div>
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17  m-0 color-grey mt-4">Surname</label><input type="text" id="b_surname" name="b_surname" autocomplete="off" placeholder="Surname" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Surname'"  class="single-input p-0 transparent-input" value="<?php echo isset($beneficiary_surname) ? $beneficiary_surname : ''; ?>">
						</div>
						<div class="error_bsurname"></div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="single_input">
						  <div class="mt-10 wide">
							<label class="left f-12 l-17 m-0 color-grey mt-4">ID Number</label><input type="number" id="b_idnumber" name="b_idnumber" maxlength="13" autocomplete="off" placeholder="eg.961008005008" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'IDNumber'"  class="single-input p-0 transparent-input" value="<?php echo isset($beneficiary_idnumber) ? $beneficiary_idnumber : ''; ?>">
						  </div>
						  <div class="error_bidnumber"></div>
						</div>
					  </div>
					</div>
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Email Address</label><input type="text" id="b_email" name="b_email" autocomplete="off" placeholder="eg. stefan@yourmail.com" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Email Address'"  class="single-input p-0 transparent-input" value="<?php echo isset($beneficiary_email) ? $beneficiary_email : ''; ?>">
						</div>
						<div class="error_bemail"></div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Cell phone number</label><input type="number" id="b_contactnumber" name="b_contactnumber" autocomplete="off" placeholder="Contact Number" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Contact Number'"  class="single-input p-0 transparent-input" value="<?php echo isset($beneficiary_contactnumber) ? $beneficiary_contactnumber : ''; ?>">
						</div>
						<div class="error_bphonenumber"></div>
					  </div>
					</div>
					<div class="col-lg-6 mt-4">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey mt-4">Alternative contact number</label><input type="number" id="b_altcontactnumber" name="b_altcontactnumber" autocomplete="off" placeholder="Contact Number" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Contact Number'"  class="single-input p-0 transparent-input" value="<?php echo isset($beneficiary_altcontactnumber) ? $beneficiary_altcontactnumber : ''; ?>">
						</div>
						<div class="error_baltphonenumber"></div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <?php include('policy-summary-desk.php'); ?>
			</div>
			<!-- <div class="container button-group-area mt-5">
			  <a href="javascript:void(0)" class="genric-btn color-azure-blue border-azure-blue large preBtn w-17 font-strong border-3x uppercase">Back</a>
			  <a href="javascript:void(0)" class="genric-btn success-border large w-17 bg-azure-blue nextBtn color-white font-strong border-3x mb-3 submitregistration uppercase three_btn">Next</a>
			  </div>  -->
		  </div>
		</form>
	  </div>
	  <div class="step-tab-panel" id="tab4">
		<form method="post" name="frmFour" id="frmFour">
		  <div class="panel-body mt-5">
			<div class="la-pagination la-display-m mb-5">
			  <div class="container">
				<div class="row">
				  <ul class="pagination pg-blue col-12 p-0">
					<li class="page-item col-7 p-0">
					  <a href="javascript:void(0)" class="page-link la-page-l" aria-label="Previous">
						<span aria-hidden="true">
						  <!--&laquo;--><img src="img/icn_arrow_left_10-blue.png"> 04 
						</span>
						<span class="sr-only">Previous</span>
					  </a>
					  <span class="uppercase f-14 l-20 ls-0-5">Dependent/s details</span>
					</li>
					<li class="page-item col-5 p-0">
					  <a class="page-link la-page-l" aria-label="Next">
						<span aria-hidden="true">
						  step 4 of 6 <img src="img/icn_arrow_right_10-blue.png"> <!--&raquo;-->
						</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-8 col-sm-12">
				<div class="content">
				  <div class="tool">
					<h3 class="panel-title f-48 l-52 color-navy ls-0-minus-2">Your dependent/s details</h3>
					<div class="tooltip">
					  <div class="row">
						<div class="col-md-2 mt-2">
						  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.5231 16.2059C4.29272 16.2059 0.863525 12.7767 0.863525 8.54629C0.863525 4.31591 4.29272 0.886719 8.5231 0.886719C12.7535 0.886719 16.1827 4.31591 16.1827 8.54629C16.1827 12.7767 12.7535 16.2059 8.5231 16.2059ZM8.52319 0.121094C3.87 0.121094 0.0976562 3.89382 0.0976562 8.54663C0.0976562 13.1998 3.87 16.9722 8.52319 16.9722C13.1764 16.9722 16.9487 13.1998 16.9487 8.54663C16.9487 3.89382 13.1764 0.121094 8.52319 0.121094ZM9.36131 4.33057C9.06412 4.33057 8.80906 4.42669 8.5965 4.61933C8.38357 4.81197 8.2771 5.04367 8.2771 5.31482C8.2771 5.58597 8.38357 5.81652 8.5965 6.00725C8.80906 6.19797 9.06412 6.29333 9.36131 6.29333C9.6585 6.29333 9.9128 6.19797 10.1238 6.00725C10.3345 5.81652 10.4402 5.58597 10.4402 5.31482C10.4402 5.04367 10.3345 4.81197 10.1238 4.61933C9.9128 4.42669 9.6585 4.33057 9.36131 4.33057ZM9.64831 12.0002C9.41393 12.0002 9.24886 11.9626 9.1535 11.8876C9.05814 11.8125 9.01065 11.672 9.01065 11.4652C9.01065 11.3828 9.02559 11.2618 9.05508 11.1013C9.08418 10.9412 9.1175 10.7984 9.15427 10.6735L9.60695 9.11711C9.65099 8.97464 9.68125 8.81762 9.69772 8.64681C9.71418 8.47524 9.72261 8.35613 9.72261 8.28796C9.72261 7.96013 9.60389 7.69358 9.3672 7.4883C9.13014 7.28341 8.79312 7.18115 8.35614 7.18115C8.11372 7.18115 7.85635 7.2229 7.58444 7.30677C7.31252 7.39026 7.02797 7.49136 6.7304 7.60894L6.60938 8.09034C6.69746 8.05817 6.80316 8.02447 6.92686 7.98847C7.0498 7.95285 7.17044 7.93524 7.28801 7.93524C7.52737 7.93524 7.68899 7.97468 7.77363 8.05281C7.85827 8.13132 7.90078 8.27034 7.90078 8.47026C7.90078 8.58056 7.88699 8.70273 7.85942 8.83639C7.83184 8.96966 7.79776 9.11213 7.75716 9.26149L7.30257 10.8233C7.26235 10.9872 7.23286 11.1346 7.21448 11.2649C7.19648 11.3943 7.18729 11.5222 7.18729 11.6471C7.18729 11.968 7.30908 12.2326 7.55303 12.4414C7.79699 12.6497 8.13937 12.7539 8.57942 12.7539C8.86589 12.7539 9.11712 12.7175 9.3335 12.6443C9.55027 12.5716 9.8398 12.4651 10.2032 12.3261L10.3243 11.8447C10.2622 11.8734 10.1611 11.906 10.0221 11.9439C9.88269 11.9814 9.75823 12.0002 9.64831 12.0002Z" fill="#008FE0"/>
						  </svg>
						</div>
						<div class="col-md-10">
						  <p class="azure-blue f-12 l-20 ls-0-1">This is where we can give a helpful tip on how to get the most out of our services. </p>
						</div>
					  </div>
					</div>
				  </div>
				  <h6 class="f-16 lh-23 ls-0-5 uppercase blue-gray mt-5">WE NEED A FEW MORE DETAILS</h6>
				  <p class="f-12 lh-20 ls-0-1 gray">We'll keep all your information safe and won't share it with anyone.</p>
				  <hr class="mt-4 border-top-columbia-blue">
				  <p class="f-24 l-32 blue-gray mt-4 ls-0-1">Main member, spouse and children only benefit details</p>
				  <a href="javascript:void(0);" class="f-12 l-20 gray ls-0-1 azure-blue" data-toggle="modal" data-target="#exampleModalCenter">Why do we need this?</a>
				</div>
				<?php include('policy-summary-mobile.php'); ?>
				<a href="javascript:void(0)" class="arrow-button border-3x blue-gray"><img src="img/icn_arrow_right_10.png" class="arrow-down1"><span class="arrow-down">Spouse detials</span></a>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17 m-0 color-grey">Full name</label><input type="text" id="spouse_firstname" name="spouse_firstname" autocomplete="off" required="required" placeholder="Full Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'FullName'"  class="single-input p-0 transparent-input" value="<?php echo isset($spouse_firstname) ? $spouse_firstname : ''; ?>">
					  </div>
					</div>
				  </div>
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">Surname</label>
						<input type="text" name="spouse_surname" id="spouse_surname" autocomplete="off" placeholder="Surname" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Surname'"  class="single-input p-0 transparent-input" value="<?php echo isset($spouse_surname) ? $spouse_surname : ''; ?>">
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey">ID Number</label><input type="number" name="spouse_idnumber" maxlength="13" id="spouse_idnumber" autocomplete="off" placeholder="eg.961008005008" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'IDNumber'"  class="single-input p-0 transparent-input" value="<?php echo isset($spouse_idnumber) ? $spouse_idnumber : ''; ?>">
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<a href="javascript:void(0)" class="arrow-button border-3x blue-gray"><img src="img/icn_arrow_right_10.png" class="arrow-down1"><span class="arrow-down">Child #1 details </span></a>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17 m-0 color-grey">Full name</label><input type="text" name="child1_firstname" id="child1_firstname" autocomplete="off" placeholder="Full Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'FullName'"  class="single-input p-0 transparent-input" value="<?php echo isset($child1_firstname) ? $child1_firstname : ''; ?>">
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">Surname</label>
						<input type="text" name="child1_surname" id="child1_surname" autocomplete="off" placeholder="Surname" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Surname'"  class="single-input p-0 transparent-input" value="<?php echo isset($child1_surname) ? $child1_surname : ''; ?>">
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="single_input">
						<div class="mt-10 wide child1idnumber">
						  <label class="left f-12 l-17 m-0 color-grey">ID Number</label><input type="number" name="child1_idnumber" maxlength="13" id="child1_idnumber" autocomplete="off" placeholder="eg.961008005008" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'IDNumber'"  class="single-input p-0 transparent-input" value="<?php echo isset($child1_idnumber) ? $child1_idnumber : ''; ?>">
						</div>
						<label class="container-checkbox mt-3"> 
						<input type="checkbox" name="child1_idnumber_option" id="child1_idnumber_option" class="mr-3" value="child1_idchecked" <?php echo (isset($child1_idnumber_option) && $child1_idnumber_option == 'child1_idchecked')  ? 'checked="checked"' : '' ?>> I don’t know the ID number<span class="checkmark"></span> 
						</label>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row child1">
				  <div class="col-6">
					<div class="single_input">
					  <div class="mt-10 wide"> 
						<label class="left f-12 l-17 m-0 color-grey mt-4">Date of birth</label> 
						<input type="text" id="child1_dateofbirth" name="child1_dateofbirth" placeholder="Date of Birth" class="single-input p-0 transparent-input" value="<?php echo isset($child1_dateofbirth) ? $child1_dateofbirth : ''; ?>">
					  </div>
					</div>
				  </div>
				  <div class="col-6">
					<section class="radio">
					  <label class="left f-12 l-17 m-0 color-grey mt-4 w-100 ml-1">Gender</label> 
					  <div class="mt-1">
						<input type="radio" id="child1_male" name="child1_gender" value="child1_male" <?php echo (isset($child1_gender) && $child1_gender == 'child1_male')  ? 'checked="checked"' : '' ?>>
						<label class="radio border-3x border-1-blue-gray" for="child1_male">
						  <h2 class="f-10 l-15 uppercase blue-gray m-0">Male</h2>
						</label>
					  </div>
					  <div class="mt-1">
						<input type="radio" id="child1_female" name="child1_gender" value="child1_female" <?php echo (isset($child1_gender) && $child1_gender == 'child1_female')  ? 'checked="checked"' : ''?>>
						<label class="radio border-3x border-1-blue-gray" for="child1_female">
						  <h2 class="f-10 l-15 uppercase blue-gray m-0">Female</h2>
						</label>
					  </div>
					</section>
				  </div>
				</div>
				<a href="javascript:void(0)" class="arrow-button border-3x blue-gray"><img src="img/icn_arrow_right_10.png" class="arrow-down1"><span class="arrow-down">Child #2 details </span></a>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17 m-0 color-grey">Full name</label><input type="text" name="child2_firstname" id="child2_firstname" autocomplete="off" placeholder="Full Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'FullName'"  class="single-input p-0 transparent-input" value="<?php echo isset($child2_firstname) ? $child2_firstname : ''; ?>">
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">Surname</label>
						<input type="text" name="child2_surname" id="child2_surname" autocomplete="off" placeholder="Surname" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Surname'"  class="single-input p-0 transparent-input" value="<?php echo isset($child2_surname) ? $child2_surname : ''; ?>">
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="single_input">
						<div class="mt-10 wide child2idnumber">
						  <label class="left f-12 l-17 m-0 color-grey">ID Number</label><input type="number" name="child2_idnumber" maxlength="13" id="child2_idnumber" autocomplete="off" placeholder="eg.961008005008" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'IDNumber'"  class="single-input p-0 transparent-input" value="<?php echo isset($child2_idnumber) ? $child2_idnumber : ''; ?>">
						</div>
						<label class="container-checkbox mt-3"> 
						<input type="checkbox" name="child2_idnumber_option" id="child2_idnumber_option" class="mr-3" value="child2_idchecked" <?php echo (isset($child2_idnumber_option) && $child2_idnumber_option == 'child2_idchecked')  ? 'checked="checked"' : '' ?>> I don’t know the ID number<span class="checkmark"></span> 
						</label>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row child2">
				  <div class="col-6">
					<div class="single_input">
					  <div class="mt-10 wide"> 
						<label class="left f-12 l-17 m-0 color-grey mt-4">Date of birth</label> 
						<input type="text" id="child2_dateofbirth" name="child2_dateofbirth" placeholder="Date of Birth" class="single-input p-0 transparent-input" value="<?php echo isset($child2_dateofbirth) ? $child2_dateofbirth : ''; ?>">
					  </div>
					</div>
				  </div>
				  <div class="col-6">
					<section class="radio">
					  <label class="left f-12 l-17 m-0 color-grey mt-4 w-100 ml-1">Gender</label> 
					  <div class="mt-1">
						<input type="radio" id="child2_male" name="child2_gender" value="child2_male" <?php echo (isset($child2_gender) && $child2_gender == 'child2_male')  ? 'checked="checked"' : '' ?>>
						<label class="radio border-3x border-1-blue-gray" for="child2_male">
						  <h2 class="f-10 l-15 uppercase blue-gray m-0">Male</h2>
						</label>
					  </div>
					  <div class="mt-1">
						<input type="radio" id="child2_female" name="child2_gender" value="child2_female" <?php echo (isset($child2_gender) && $child2_gender == 'child2_female')  ? 'checked="checked"' : '' ?>>
						<label class="radio border-3x border-1-blue-gray" for="child2_female">
						  <h2 class="f-10 l-15 uppercase blue-gray m-0">Female</h2>
						</label>
					  </div>
					</section>
				  </div>
				</div>
				<hr class="border-top-gray">
				<a href="javascript:void(0)" class="arrow-button border-3x blue-gray mt-69"><img src="img/icn_arrow_right_10.png" class="arrow-down1"><span class="arrow-down">Add extended Family Funeral </span></a>
				<p class="uppercase f-16 l-23 ls-0-5 blue-gray mt-3">John will get</p>
				<div class="row">
				  <div class="container">
					<div class="col-6 pl-0">
					  <div class="default-select" id="default-select">
						<select style="display: none;">
						  <option value="1">R 10 000</option>
						  <option value="1">R 20 000</option>
						  <option value="1">R 30 000</option>
						  <option value="1">R 50 000</option>
						  <option value="1">R 70 000</option>
						</select>
						<div class="nice-select" tabindex="0">
						  <span class="current">R 10 000</span>
						  <ul class="list">
							<li data-value="1" class="option selected">R 10 000</li>
							<li data-value="1" class="option">R 20 000</li>
							<li data-value="1" class="option">R 30 000</li>
							<li data-value="1" class="option">R 50 000</li>
							<li data-value="1" class="option">R 70 000</li>
						  </ul>
						</div>
					  </div>
					</div>
					<div class="col-6"></div>
				  </div>
				</div>
				<div class="w-100 mt-2 mb-87">
				  <p class="f-24 l-32 ls-0-minus-2 blue-gray w-100">worth of cover for <b class="family-strong blue-gray">R 75.00</b> per month.</p>
				  <div class="azure-blue"><a href="javascript:void(0)"><span class="azure-blue f-14 l-20 ls-0-5 uppercase mr-2 family-strong">Edit</span></a> | <a href="javascript:void(0)"><span class=" ml-2 azure-blue f-14 l-20 ls-0-5 uppercase family-strong">Remove</span></a></div>
				</div>
				<hr>
			  </div>
			  <?php include('policy-summary-desk.php'); ?>
			</div>
			<!-- <div class="container button-group-area mt-5">
			  <a href="javascript:void(0)" class="genric-btn color-azure-blue border-azure-blue large preBtn w-17 font-strong border-3x uppercase">Back</a>
			  <a href="javascript:void(0)" class="genric-btn success-border large w-17 bg-azure-blue nextBtn color-white font-strong border-3x mb-3 submitregistration uppercase">Next</a>
			  </div>  -->
		  </div>
		</form>
	  </div>
	  <div class="step-tab-panel" id="tab5">
		<form method="post" name="frmFive" id="frmFive">
		  <div class="panel-body mt-5">
			<div class="la-pagination la-display-m mb-5">
			  <div class="container">
				<div class="row">
				  <ul class="pagination pg-blue col-12 p-0">
					<li class="page-item col-7 p-0">
					  <a href="javascript:void(0)" class="page-link la-page-l" aria-label="Previous">
						<span aria-hidden="true">
						  <!--&laquo;--><img src="img/icn_arrow_left_10-blue.png"> 05 
						</span>
						<span class="sr-only">Previous</span>
					  </a>
					  <span class="uppercase f-14 l-20 ls-0-5">Quote summary</span>
					</li>
					<li class="page-item col-5 p-0">
					  <a class="page-link la-page-l" aria-label="Next">
						<span aria-hidden="true">
						  step 5 of 6 <img src="img/icn_arrow_right_10-blue.png"> <!--&raquo;-->
						</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
			 <div class="response_fifth"></div>
			 
			 <div class="row"> 
			 <label class="container-checkbox mt-3"> 
				  <input type="checkbox" required name="tandc" id="tandc" class="mr-3" value="tandc" <?php echo (isset($tandc) && $tandc == 'tandc')  ? 'checked="checked"' : '' ?>> I accept the <b><a href="terms-conditions" class="color-gray">terms and conditions</a></b><span class="checkmark"></span> 
				  </label>
				  </div>
		  </div>
		</form>
	  </div>
	  <div class="step-tab-panel" id="tab6">
		<form method="post" name="frmSix" id="frmSix">
		  <?php //include('apiBankList.php'); ?>
		  <div class="panel-body mt-5">
			<div class="la-pagination la-display-m mb-5">
			  <div class="container">
				<div class="row">
				  <ul class="pagination pg-blue col-12 p-0">
					<li class="page-item col-7 p-0">
					  <a href="javascript:void(0)" class="page-link la-page-l" aria-label="Previous">
						<span aria-hidden="true">
						  <!--&laquo;--><img src="img/icn_arrow_left_10-blue.png"> 06 
						</span>
						<span class="sr-only">Previous</span>
					  </a>
					  <span class="uppercase f-14 l-20 ls-0-5">Payment</span>
					</li>
					<li class="page-item col-5 p-0">
					  <a class="page-link la-page-l" aria-label="Next">
						<span aria-hidden="true">
						  step 6 of 6 <img src="img/icn_arrow_right_10-blue.png"> <!--&raquo;-->
						</span>
						<span class="sr-only">Confirm</span>
					  </a>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="container col-md-8 col-sm-12">
				<div class="content">
				  <div class="tool">
					<h3 class="panel-title f-48 l-52 color-navy ls-0-minus-2">Your details for payment</h3>
					<div class="tooltip">
					  <div class="row">
						<div class="col-md-2 mt-2">
						  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.5231 16.2059C4.29272 16.2059 0.863525 12.7767 0.863525 8.54629C0.863525 4.31591 4.29272 0.886719 8.5231 0.886719C12.7535 0.886719 16.1827 4.31591 16.1827 8.54629C16.1827 12.7767 12.7535 16.2059 8.5231 16.2059ZM8.52319 0.121094C3.87 0.121094 0.0976562 3.89382 0.0976562 8.54663C0.0976562 13.1998 3.87 16.9722 8.52319 16.9722C13.1764 16.9722 16.9487 13.1998 16.9487 8.54663C16.9487 3.89382 13.1764 0.121094 8.52319 0.121094ZM9.36131 4.33057C9.06412 4.33057 8.80906 4.42669 8.5965 4.61933C8.38357 4.81197 8.2771 5.04367 8.2771 5.31482C8.2771 5.58597 8.38357 5.81652 8.5965 6.00725C8.80906 6.19797 9.06412 6.29333 9.36131 6.29333C9.6585 6.29333 9.9128 6.19797 10.1238 6.00725C10.3345 5.81652 10.4402 5.58597 10.4402 5.31482C10.4402 5.04367 10.3345 4.81197 10.1238 4.61933C9.9128 4.42669 9.6585 4.33057 9.36131 4.33057ZM9.64831 12.0002C9.41393 12.0002 9.24886 11.9626 9.1535 11.8876C9.05814 11.8125 9.01065 11.672 9.01065 11.4652C9.01065 11.3828 9.02559 11.2618 9.05508 11.1013C9.08418 10.9412 9.1175 10.7984 9.15427 10.6735L9.60695 9.11711C9.65099 8.97464 9.68125 8.81762 9.69772 8.64681C9.71418 8.47524 9.72261 8.35613 9.72261 8.28796C9.72261 7.96013 9.60389 7.69358 9.3672 7.4883C9.13014 7.28341 8.79312 7.18115 8.35614 7.18115C8.11372 7.18115 7.85635 7.2229 7.58444 7.30677C7.31252 7.39026 7.02797 7.49136 6.7304 7.60894L6.60938 8.09034C6.69746 8.05817 6.80316 8.02447 6.92686 7.98847C7.0498 7.95285 7.17044 7.93524 7.28801 7.93524C7.52737 7.93524 7.68899 7.97468 7.77363 8.05281C7.85827 8.13132 7.90078 8.27034 7.90078 8.47026C7.90078 8.58056 7.88699 8.70273 7.85942 8.83639C7.83184 8.96966 7.79776 9.11213 7.75716 9.26149L7.30257 10.8233C7.26235 10.9872 7.23286 11.1346 7.21448 11.2649C7.19648 11.3943 7.18729 11.5222 7.18729 11.6471C7.18729 11.968 7.30908 12.2326 7.55303 12.4414C7.79699 12.6497 8.13937 12.7539 8.57942 12.7539C8.86589 12.7539 9.11712 12.7175 9.3335 12.6443C9.55027 12.5716 9.8398 12.4651 10.2032 12.3261L10.3243 11.8447C10.2622 11.8734 10.1611 11.906 10.0221 11.9439C9.88269 11.9814 9.75823 12.0002 9.64831 12.0002Z" fill="#008FE0"/>
						  </svg>
						</div>
						<div class="col-md-10">
						  <p class="azure-blue f-12 l-20 ls-0-1">This is where we can give a helpful tip on how to get the most out of our services. </p>
						</div>
					  </div>
					</div>
				  </div>
				  <h6 class="f-16 lh-23 ls-0-5 uppercase blue-gray mt-5">WE NEED A FEW MORE DETAILS</h6>
				  <p class="f-12 lh-20 ls-0-1 gray">Please fill out the form below to complete your debt order.</p>
				  <hr class="mt-4 border-top-columbia-blue">
				  <p class="f-24 l-32 blue-gray mt-4 ls-0-1">Debit order</p>
				</div>
				<div class="row mt-3">
				  <div class="col-lg-6">
					<div class="wide">
					  <label class="left f-12 l-17 m-0 color-grey ">Bank</label>
					  <div class="default-select title" id="default-select">
						<select name="p_bankname" id="p_bankname" required="required" onChange="setBranchList( this.value )">
						  <option value="">Select Type</option>
						  <?php for ($i = 0; $i < count($arraybanks); $i++) { 
							$universal = $array['BankQueue']['UNIVERSALBRANCHCODE'][$i]; 
							if (is_array($universal) && empty($universal)) { 
								 $splituniversal = "NA";
							}else{
								 $splituniversal = $array['BankQueue']['UNIVERSALBRANCHCODE'][$i]; 
							}
							?>
						  <option data-id="<?php echo $splituniversal; ?>" value="<?php echo $array['BankQueue']['BANKGUID'][$i]; ?>" <?php echo (isset($bankname) && $bankname == $array['BankQueue']['BANKGUID'][$i]) ? 'selected="selected"' : ''; ?> ><?php echo $array['BankQueue']['BANKNAME'][$i]; ?></option>
						  <?php } ?>
						</select>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">Branch</label>
						<input type="text" name="branch" id="branch" autocomplete="off" placeholder="Branch" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Branch'"  class="single-input p-0 transparent-input" value="<?php echo isset($branch) ? $branch : ''; ?>">
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-6">
					<div class="single_input">
					  <div class="single_input">
						<div class="mt-10 wide">
						  <label class="left f-12 l-17 m-0 color-grey">Branch Code</label><input type="text" id="branchcode-list" name="branchcode" autocomplete="off" placeholder="Code" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Code'"  class="single-input p-0 transparent-input" value="<?php echo isset($branchcode) ? $branchcode : ''; ?>">
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row mt-3">
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">Account holder name</label>
						<input type="text" id="p_account_holder_name" name="p_account_holder_name" autocomplete="off" placeholder="Name" required onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Name'"  class="single-input p-0 transparent-input" value="<?php echo isset($accountholdername) ? $accountholdername : ''; ?>">
					  </div>
					</div>
				  </div>
				  <div class="col-lg-4">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">Account number</label>
						<input type="number" id="p_account_number" maxlength="11" name="p_account_number" autocomplete="off" placeholder="Number" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Number'"  class="single-input p-0 transparent-input" value="<?php echo isset($accountnumber) ? $accountnumber : ''; ?>">
					  </div>
					</div>
				  </div>
				</div>
				<div class="row mt-3">
				  <div class="col-lg-3">
					<div class="wide">
					  <label class="left f-12 l-17 m-0 color-grey ">Account type</label>
					  <div class="default-select title" id="default-select">
						<select name="p_account_type" id="p_account_type">
						  <option value="savings" <?php echo (isset($accounttype) && $accounttype == 'savings')  ? 'selected="selected"' : '' ?>>Savings</option>
						  <option value="current" <?php echo (isset($accounttype) && $accounttype == 'current')  ? 'selected="selected"' : '' ?>>Current</option>
						</select>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row mt-3">
				  <div class="col-lg-4">
					<div class="wide">
					  <label class="left f-12 l-17 m-0 color-grey ">Debit order date</label>
					  <div class="default-select title" id="default-select">
						<select name="debitorderdate" id="debitorderdate">
						  <option value="">Select date</option>
						  <?php 
							for($i=1;$i<=31;$i++){ ?>
						  <option value="<?php echo $i; ?>"<?php echo (isset($debitorderdate) && $debitorderdate == $i)  ? 'selected="selected"' : '' ?>><?php echo $i; ?></option>
						  <?php } ?>
						</select>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-5">
					<div class="single_input">
					  <div class="mt-10 wide">
						<label class="left f-12 l-17  m-0 color-grey">When would you like your cover to start?</label>
						<input type="text" name="coverdate" id="coverdate" autocomplete="off" class="single-input p-0 transparent-input" value="<?php echo isset($coverdate) ? $coverdate : ''; ?>">
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <?php include('policy-summary-desk.php'); ?>
			</div>
		  </div>
		</form>
	  </div>
	</div>
	<div class="step-footer">
	  <button data-direction="prev" class="genric-btn color-azure-blue border-azure-blue large preBtn w-17 font-strong border-3x uppercase">Back</button>
	  <button data-direction="next" class="genric-btn success-border large w-17 bg-azure-blue color-white font-strong uppercase border-3x mb-3">Next</button>
	  <button data-direction="finish" class="genric-btn success-border large w-17 bg-azure-blue color-white font-strong uppercase border-3x mb-3">Confirm</button>
	</div>
  </div>
</div>
</div>
</div>
<!--/ apply_form_area -->
<!-- link that opens popup -->
<!-- JS here -->
<?php include('footer.php'); ?>
<script>
$(document).ready(function () {
$("#c_address").keyup(
   function (event) {
	   $("#listitems").show();
   }
);

function numberOnly(input) {
var regex = /[^0-9]/gi;
input.value = input.value.replace(regex, "");
}
var navListItems = $('div.setup-panel div a'),
allWells = $('.setup-content'),
allNextBtn = $('.nextBtn');
allPreBtn = $('.preBtn');

allWells.hide();

navListItems.click(function (e) {
e.preventDefault();
var $target = $($(this).attr('href')),
$item = $(this);

if (!$item.hasClass('disabled')) {
navListItems.removeClass('btn-success').addClass('gray');
$item.addClass('btn-success');
allWells.hide();
$target.show();
//$target.find('input:eq(0)').focus();
}
});

allNextBtn.click(function () {
$(".stepwizard-row").css("display","contents");
var curStep = $(this).closest(".setup-content"),
curStepBtn = curStep.attr("id"),
nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
curInputs = curStep.find("input[type='text'],select"),
isValid = true;
$(".form-group").removeClass("has-error");
for (var i = 0; i < curInputs.length; i++) {
if (!curInputs[i].validity.valid) {
  isValid = false;
  $(curInputs[i]).closest(".form-group").addClass("has-error");

  //$(".focus").focus();
}
}

if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});
allPreBtn.click(function () {
var curStep = $(this).closest(".setup-content"),
curStepBtn = curStep.attr("id"),
nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
curInputs = curStep.find("input[type='text'],input[type='url']"),
isValid = true;

$(".form-group").removeClass("has-error");
for (var i = 0; i < curInputs.length; i++) {
if (!curInputs[i].validity.valid) {
  isValid = false;
  $(curInputs[i]).closest(".form-group").addClass("has-error");
}
}

if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-success').trigger('click');
});


$(document).ready(function() { 
$('[data-toggle="tooltip"]').tooltip(); 
});  
</script> 
<script>
const dataList = document.getElementById('dataList');
const input = document.getElementById('autoComplete');

const sectors = ["1240 John Vorster Dr, Irene, Centurion",
"1236 John Vorster Dr, Irene, Centurion",
"1237 John Vorster Dr, Irene, Centurion",
"1238 John Vorster Dr, Irene, Centurion",
"1240 John Vorster Dr, Irene, Centurion",
"1241 John Vorster Dr, Irene, Centurion",
"1243 John Vorster Dr, Irene, Centurion",
"1244 John Vorster Dr, Irene, Centurion",
"1246 John Vorster Dr, Irene, Centurion",
"1245 John Vorster Dr, Irene, Centurion",
"1248 John Vorster Dr, Irene, Centurion",
"1258 John Vorster Dr, Irene, Centurion",
"1254 John Vorster Dr, Irene, Centurion",
"1250 John Vorster Dr, Irene, Centurion"];
sectors.sort();

for (let i = 0; i < sectors.length; ++i) {
const option = document.createElement('option');
option.setAttribute('value', sectors[i]);
option.innerHTML = sectors[i];
dataList.appendChild(option);
}

dataList.querySelectorAll('option').forEach((el, idx, arr) => {
el.addEventListener('click', (e) => {
  input.value = el.value;
});
});

input.addEventListener('focus', showList);

input.addEventListener('blur', () => {
  $('#listitems').show();
	  $('#city').val(this.value);
	  $('#province').val(this.value); 
	  $('#code').val(this.value);
setTimeout(() => {
  dataList.classList.remove('show');
}, 300);
});

input.addEventListener('keyup', showList);

function showList() {
if (!!input.value) {
  input.setAttribute("list", "dataList");
  dataList.classList.remove('show');
} else {
  input.removeAttribute("list");
  dataList.classList.add('show');
}
}

input.addEventListener('change', () => {
if(!dataList.querySelector(`option[value='${input.value}']`)) {
  input.value = '';
} else {
  input.blur();
}
});

</script>
<script type="text/javascript">
function redirect()
{
window.location.href = "./thankyou";
}
</script>
<script>
$(function () {
var $sections = $('.form-section');

function navigateTo(index) {
  // Mark the current section with the class 'current'
  $sections
	.removeClass('current')
	.eq(index)
	  .addClass('current');
  // Show only the navigation buttons that make sense for the current section:
  $('.form-navigation .previous').toggle(index > 0);
  var atTheEnd = index >= $sections.length - 1;
  $('.form-navigation .next').toggle(!atTheEnd);
  $('.form-navigation [type=submit]').toggle(atTheEnd);
}

function curIndex() {
  // Return the current index by looking at which section has the class 'current'
  return $sections.index($sections.filter('.current'));
}

// Previous button is easy, just go back
$('.form-navigation .previous').click(function() {
  navigateTo(curIndex() - 1);
});

// Next button goes forward iff current block validates
$('.form-navigation .next').click(function() {
  var plan_desk = jQuery('input[name=plan-desk]:checked').val();
   var err = [];
	  var cnt = 0;

if (plan_desk == undefined) {
		  $(".error_plan_desk").html("Select the plan.").css('color', 'red');
		  err += cnt + 1;
	  } else {
		  $(".error_plan_desk").html("");
	  }
	if (err != "") {
		  return false;
	  }
  if ($('.demo-form').parsley().validate('block-' + curIndex()))
	navigateTo(curIndex() + 1);
});

// Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
$sections.each(function(index, section) {
  $(section).find(':input').attr('data-parsley-group', 'block-' + index);
});
navigateTo(0); // Start at the beginning
});



// from textBoxes.html
function sayHi(){
var txtName = document.getElementById("txtName");
var txtOutput = document.getElementById("txtOutput");
var name = txtName.value;
txtOutput.value = "Hi there, " + name + "! Could you pop your email address below?"
} // end sayHi
</script>
<script>
var sessionplan = $.session.get('checkedplan');
if(sessionplan){
$("input[name='plan'][data-name=" + sessionplan + "]").prop("checked", true);
$("input[name='plan-desk'][data-name=" + sessionplan + "]").prop("checked", true);
$.post("readRecords.php", {
plan: $.session.get('plan'),
planname: $.session.get('planname'),
option: $.session.get('option')
}, function (data, status) {
$(".records_content").html(data);
$(".se-pre-con-inner").hide();
$("#confirm").text('Next');

}); 
}
$(".childrens").hide();
var sesschildren = $.session.get('childrens');
if(sesschildren){
$(".childrens").show();
}
$(".plan").on("click",function(e){ //on add input button click
$(".benefittype").attr("checked",false);
var plan = $(this).attr('id');
// document.cookie = 'planchecked='+plan+'; path=/;';
var planname = $(this).val();

if(plan == 'TelFun Children' || plan == 'TelFun Family'){
$(".childrens").show();
}else{
$(".childrens").hide();
}
var optionvalue = $(this).attr('data-id');
var checked = $(this).attr('data-name');
$.post("readRecords.php", {
plan: plan,
planname: planname,
option: optionvalue
}, function (data, status) {
$.session.set('plan',plan);
$.session.set('planname',planname);
$.session.set('option',optionvalue);
$.session.set('checkedplan',checked);
$("#confirm").text('Next');

}); 
// $.post("readStepTwo.php", {
// plan: plan,
// planname: planname,
// option: optionvalue
// }, function (data, status) {
// $(".responsesetptwo").html(data);
// }); 
	
});

</script>
<script type="text/javascript">
function setBranchList(val) {
var selectedCountry = $("#p_bankname").children("option:selected").data('id');
var selectedbranch = $("#p_bankname").children("option:selected").val();
$.ajax({
	type: "POST",
	url: "branchcode.php",
	data:'selectedbankcode='+selectedCountry,
	success: function(data){
		$("#branchcode-list").val(data);
	}
});
$.ajax({
	type: "POST",
	url: "branch.php",
	data:'selectedbankbranch='+selectedbranch,
	success: function(data){
		$("#branch").val(data);
	}
});
}
function setChildren(val) {
$.session.set('childrens',val);
$.ajax({
	type: "POST",
	url: "readRecords.php",
	data:'childrens='+val,
	success: function(data){
		$(".records_content").html(data);
		$(".se-pre-con-inner").hide();
	}
});
}
</script>
<script>
$('#coverdate').datepicker();
$('#child1_dateofbirth').datepicker();
$('#child2_dateofbirth').datepicker();
</script>
<script>
$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $(".input_fields_wrap"); //Fields wrapper
var add_button      = $(".add_field_button"); //Add button ID

var x = 2; //initlal text box count
$(add_button).on("click",function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="card new mb-5 mt-5 family-count"><div class="container mt-3 mb-3"><p class="f-18 l-26 blue-gray">Extended Family Funeral</p><div class="row mt-4"><div class="col-sm-4"> <label class="left f-12 l-17 gray m-0 w-100">Which family member?</label><div class="col-md-12 pl-0"><div class="default-select title" id="default-select"> <select name="familymembertitle" class="familymembertitle" id="familymembertitle'+x+'"><option value="">Select Type</option><option value="Brother-in-law">Brother-in-law</option><option value="Child">Child</option><option value="Father-in-law">Father-in-law</option><option value="In-law">In-law</option><option value="Life partner">Life partner</option><option value="Mother-in-law">Mother-in-law</option><option value="Parent">Parent</option><option value="Sibling">Sibling</option><option value="Sister-in-law">Sister-in-law</option><option value="Spouse">Spouse</option> </select></div></div></div><div class="col-sm-6"></div><div class="col-lg-6 mt-4"><div class="single_input"><div class="mt-10 wide"> <label class="left f-12 l-17 m-0 color-grey mt-4">Full name</label> <input type="text" id="firstname'+x+'" name="firstname" data-name="family" autocomplete="off" placeholder="FullName" onfocus="this.placeholder=" onblur="this.placeholder=FullName" class="count single-input p-0 transparent-input" /></div></div></div><div class="col-lg-4 mt-4"><div class="single_input"><div class="mt-10 wide"> <label class="left f-12 l-17 m-0 color-grey mt-4">Surname</label> <input type="text" name="surname" id="surname'+x+'" autocomplete="off" placeholder="Surname" onfocus="this.placeholder=" onblur="this.placeholder=Surname" class="single-input p-0 transparent-input" /></div></div></div><div class="col-lg-6 mt-4" id="id'+x+'"><div class="single_input"><div class="single_input"><div class="idnumber'+x+' mt-10 wide"> <label class="left f-12 l-17 m-0 color-grey mt-4">ID Number</label> <input type="Number" id="idnumber'+x+'" name="idnumber" autocomplete="off" placeholder="ID Number" onfocus="this.placeholder=" onblur="this.placeholder=ID Number" class="single-input p-0 transparent-input" /></div></div></div></div><div class="col-lg-6 mt-4"></div><div class="col-lg-12 mt-4"><div class=""> <label class="container-checkbox"> <input type="checkbox" name="optradio" class="optradio" class="mr-3" />I don’t know the ID number <span class="checkmark"></span> </label><div class="row" id="hidedetails'+x+'"><div class="col-6"><div class="single_input"><div class="mt-10 wide"> <label class="left f-12 l-17 m-0 color-grey mt-4">Date of birth</label> <input type="text" id="dateofbirth'+x+'" name="dateofbirth" placeholder="Date of Birth" class="single-input p-0 transparent-input" /></div></div></div><div class="col-6"> <section class="radio"> <label class="left f-12 l-17 m-0 color-grey mt-4 w-100 ml-1">Gender</label><div class="mt-1"> <input type="radio" id="male'+x+'" name="gender" value="male" /> <label class="radio border-3x border-1-blue-gray" for="male'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">Male</h2> </label></div><div class="mt-1"> <input type="radio" id="female'+x+'" name="gender" value="female" /> <label class="radio border-3x border-1-blue-gray" for="female'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">Female</h2> </label></div> </section></div></div><div id="append'+x+'"> <div id="childcoveramount'+x+'"></div></div></div></div><div class="col-lg-12"><div class="button-group-area mt-4"> <a href="javascript:void(0)" class="genric-btn color-azure-blue border-azure-blue large w-25 font-strong border-3x uppercase remove_field">Cancel</a> <a href="javascript:void(0)" class="addtoplan genric-btn success-border large w-25 bg-azure-blue color-white font-strong border-3x uppercase">Add to plan</a></div></div></div></div></div>'); 
$('.familymembertitle').niceSelect();
//add input box
var wrapper1         = $(".optradio"); //Fields wrapper
$("#hidedetails"+x).toggle();
$('#dateofbirth'+x).datepicker({
	format: 'dd/mm/yyyy',
	assumeNearbyYear: true,
	autoclose: true,
	orientation: 'bottom right',
	todayHighlight: true,
	keyboardNavigation: false
  })
  .change(function(e) {
	$("#childcoveramount"+x).remove(); 
	var id = $('#dateofbirth'+x).val()
	var iddate = id.substring(6, 10);
	var currentYear = (new Date).getFullYear();
	var age = (currentYear) - (iddate) ;
	if(age>=14 && age<=21){
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div> <input type="radio" id="20000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="20000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2> </label></div><div> <input type="radio" id="30000'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="30000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 30 000</h2> </label></div><div> <input type="radio" id="50000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="50000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 50 000</h2> </label></div><div class="pr-0"> <input type="radio" id="70000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="70000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 70 000</h2> </label></div> </section></div>');
}else if(age>=6 && age<=13){
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="5000'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="5000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 5 000</h2> </label></div><div> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div> <input type="radio" id="15000'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="15000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 15 000</h2> </label></div><div> <input type="radio" id="25000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="25000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 25 000</h2> </label></div><div class="pr-0"> <input type="radio" id="50000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="50000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 50 000</h2> </label></div> </section></div>');
}else if(age>=0 && age<=5){
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="2500'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="2500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 2 500</h2> </label></div><div> <input type="radio" id="5000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="5000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 5 000</h2> </label></div><div> <input type="radio" id="7500'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="7500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 7 500</h2> </label></div><div> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div class="pr-0"> <input type="radio" id="20000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="20000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2> </label></div> </section></div>');
}else{
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="2500'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="2500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 2 500</h2> </label></div><div> <input type="radio" id="5000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="5000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 5 000</h2> </label></div><div> <input type="radio" id="7500'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="7500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 7 500</h2> </label></div><div> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div class="pr-0"> <input type="radio" id="20000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="20000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2> </label></div> </section></div>');	
}
	
  });
$(wrapper1).on("click",function(e){
$("#hidedetails"+x).toggle();
$(".idnumber"+x).toggle();
$("#idnumber"+x).val("");
$("#dateofbirth"+x).val("");

});

$( "#idnumber"+x ).on('input', function() {
var idnumber = $(this).val();
  if ($(this).val().length==13) {
  var tempDate = new Date(idnumber.substring(0, 2), idnumber.substring(2, 4) - 1, idnumber.substring(4, 6));
var iddate = idnumber.substring(0, 2);
  var id_date = tempDate.getDate();
  var id_month = tempDate.getMonth();
  var id_year = tempDate.getFullYear();
var fullDate = id_date + "-" + (id_month + 1) + "-" + id_year;
var currentYear = (new Date).getFullYear();
var currentYear1 = id_year % 100;
var year = currentYear % 100;
var prefix = "19";
if (currentYear1 < year)
var prefix = "20";

var age = (currentYear) - (prefix+iddate) ;
if(age>=14 && age<=21){
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div> <input type="radio" id="20000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="20000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2> </label></div><div> <input type="radio" id="30000'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="30000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 30 000</h2> </label></div><div> <input type="radio" id="50000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="50000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 50 000</h2> </label></div><div class="pr-0"> <input type="radio" id="70000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="70000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 70 000</h2> </label></div> </section></div>');
}else if(age>=6 && age<=13){
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="5000'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="5000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 5 000</h2> </label></div><div> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div> <input type="radio" id="15000'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="15000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 15 000</h2> </label></div><div> <input type="radio" id="25000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="25000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 25 000</h2> </label></div><div class="pr-0"> <input type="radio" id="50000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="50000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 50 000</h2> </label></div> </section></div>');
}else if(age>=0 && age<=5){
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="2500'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="2500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 2 500</h2> </label></div><div> <input type="radio" id="5000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="5000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 5 000</h2> </label></div><div> <input type="radio" id="7500'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="7500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 7 500</h2> </label></div><div> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div class="pr-0"> <input type="radio" id="20000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="20000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2> </label></div> </section></div>');
}else{
	$("#append"+x).append('<div id="childcoveramount'+x+'"><label class="mt-3 w-100 f-12 l-17 color-gray">How much cover would you like?</label> <section class="radio"><div class="pl-0"> <input type="radio" id="2500'+x+'" name="cover" value="Telkom Funeral A"> <label class="radio border-3x border-1-blue-gray" for="2500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 2 500</h2> </label></div><div> <input type="radio" id="5000'+x+'" name="cover" value="Telkom Funeral B"> <label class="radio border-3x border-1-blue-gray" for="5000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 5 000</h2> </label></div><div> <input type="radio" id="7500'+x+'" name="cover" value="Telkom Funeral C"> <label class="radio border-3x border-1-blue-gray" for="7500'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 7 500</h2> </label></div><div> <input type="radio" id="10000'+x+'" name="cover" value="Telkom Funeral D"> <label class="radio border-3x border-1-blue-gray" for="10000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 10 000</h2> </label></div><div class="pr-0"> <input type="radio" id="20000'+x+'" name="cover" value="Telkom Funeral E"> <label class="radio border-3x border-1-blue-gray" for="20000'+x+'"><h2 class="f-10 l-15 uppercase blue-gray m-0">R 20 000</h2> </label></div> </section></div>');	
}      
  }else if ($(this).val().length < 13) {
  $("#childcoveramount"+x).remove();   
  }else{
$("#childcoveramount"+x).remove();     
}
});
}
});

$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').parent('div').parent('div').parent('div').parent('div').remove(); x--;
});
$(wrapper).on("click",".remove_family_member", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('a').parent('div').parent('div').parent('div').remove(); x--;
});

$(wrapper).on("click",".addtoplan", function(e){ //user click on remove text

var familyadding = $('#frmSecond').serializeArray();
var relation = $('#familymembertitle'+x).val();
$.post("readRecords.php", {
json_data_familyadded: familyadding,
familyrelation: relation
}, function (data, status) {
$(".records_content").html(data);
$(".se-pre-con-inner").hide();
});
var fname = $("#firstname"+x).val();
var title = $("#familymembertitle"+x).val();
e.preventDefault(); $(this).parent('div').parent('div').parent('div').parent('div').parent('div').css("display","none");
$(wrapper).append('<div class="addextend"> <hr class="mt-5 border-top-columbia-blue mb-4"> <p class="f-24 blue-gray mt-1 l-32">Add your extended family to your plan.</p><p class="f-12 blue-gray mt-0 l-20 mb-0 lh-20 ls-0-1">Plan ahead for your family s future, and add them to your plan.</p><p class="f-12 gray mt-0 l-32 lh-20 ls-0-14">You can add up to 14 extended family members.</p><p class="uppercase f-16 l-23 ls-0-5 blue-gray mt-3">'+fname+' will get</p><div class="row"> <div class="container"> <div class="col-4 pl-0"> <div class="default-select" id="default-select"> <select class="family"> <option value="1">R 10 000.00</option> <option value="1">R 20 000.00</option> <option value="1">R 30 000.00</option> <option value="1">R 50 000.00</option> <option value="1">R 70 000.00</option> </select> </div></div><div class="col-6"></div></div></div><div class="w-100 mt-2"> <p class="f-24 l-32 ls-0-minus-2 blue-gray w-100">worth of cover for <b class="family-strong blue-gray">R 75.00</b> per month.</p><div class="azure-blue"><a href="javascript:void(0)"><span class="azure-blue f-14 l-20 ls-0-5 uppercase mr-2 family-strong">Edit</span></a> | <a href="javascript:void(0)"><span class=" ml-2 azure-blue f-14 l-20 ls-0-5 uppercase family-strong remove_family_member">Remove</span></a></div></div></div>');
$('.family').niceSelect();
$(".extendedfamilyresponse").append('<div class="mt-5 container box border-3x p-3"> <p class="f-14 lh-22 ls-0-18 font-strong ">Extended Funeral plan</p><label class="f-14 lh-22 ls-0-18 color-white w-100">'+title+'</label> <hr class="border-white-top"> <div class="row"> <div class="col-sm-6"> <p class="f-12 lh-15 family-strong uppercase mb-0">Basic premium</p></div><div class="col-sm-6 text-right"> <label class="f-14 lh-28 ls-0-21 color-white family-strong">R75.00</label> </div></div><hr class="border-white-top"> <p class="uppercase f-12 lh-15 family-strong mb-0">Benefit amount</p><label class="f-37 lh-54 font-strong color-white">R10 000</label> </div>');

});

});
</script>
<script>
var frmOne = $('#frmOne');
var frmOneValidator = frmOne.validate(); 

var frmSecond = $('#frmSecond');
var frmSecondValidator = frmSecond.validate();

var frmThird = $('#frmThird');
var frmThirdValidator = frmThird.validate();

var frmFour = $('#frmFour');
var frmFourValidator = frmFour.validate();

var frmFive = $('#frmFive');
var frmFiveValidator = frmFive.validate();

var frmSix = $('#frmSix');
var frmSixValidator = frmSix.validate();
$(".step-steps").css("display","none");
$('#demo').steps({
onChange: function (currentIndex, newIndex, stepDirection) {
  // step1
  if (currentIndex === 0) {
$(".step-steps").css("display","none");
	if (stepDirection === 'forward') {
$(".step-steps").css("display","flex","!important");
var plan_desk = jQuery('input[name=plan-desk]:checked').val();
var plan = $("input[name=plan-desk]:checked").attr('id');
var coveramount_one = jQuery('input[name=coveramount]:checked').val();
var childrens = jQuery('#children').val();
var err = [];
var cnt = 0;
if (plan_desk == undefined) {
	  $(".error_plan_desk").html("Select the plan.").css('color', 'red');
	  err += cnt + 1;
} else {
$(".error_plan_desk").html("");
if (coveramount_one == undefined) {
$(".error_coveramount").html("Select the cover amount.").css('color', 'red');
err += cnt + 1;
} else {
$(".error_coveramount").html("");
}
if(plan == 'TelFun Family' || plan == 'TelFun Children' ){
if (childrens == "") {
$(".error_children").html("Select the children.").css('color', 'red');
err += cnt + 1;
} else {
$(".error_children").html("");
}
}else{
$(".error_children").html("");
}
}

if (err != "") {
return false;
}
var quoteform = $('#frmOne').serializeArray();
var plan = $("input[name='plan']:checked").val();
$(".coveramount").html(plan);
var plandesk = $("input[name='plan-desk']:checked").val();
$.post("maingetaQuote.php", {
json_data_one: quoteform,
plan: plan,
plandesk: plandesk
}, function (data, status) {
$(".response_plan").html(data);
});
$.post("plandetails.php", {
json_data_one: quoteform,
plan: plan,
plandesk: plandesk
}, function (data, status) {
$(".response_plan").html(data);
});
	  return frmOne.valid();
	}
	if (stepDirection === 'backward') {
	  frmOneValidator.resetForm();
	}
  }
  // step2
  if (currentIndex === 1) {
	if (stepDirection === 'forward') {
var quoteform = $('input[name=firstname]').serializeArray();
var title = $('select[name=familymembertitle]').serializeArray();
var id = $('input[name=idnumber]').serializeArray();
var dateofbirth = $('input[name=dateofbirth]').serializeArray();
var cover = $('input[name=cover]').serializeArray();
var gender = $('input[name=gender]').serializeArray();
$.post("maingetaQuote1.php", {
json_data_two: quoteform,
familymembertitle: title,
familymemberid: id,
dateofbirth: dateofbirth,
cover: cover,
gender: gender
}, function (data, status) {
//alert(data);
});
	  return frmSecond.valid();
	}
	if (stepDirection === 'backward') {
	  frmSecondValidator.resetForm();
	}
  }
// step3
  if (currentIndex === 2) {
	if (stepDirection === 'forward') {
var quoteform = $('#frmThird').serializeArray();
$.post("maingetaQuote2.php", {
json_data_three: quoteform
}, function (data, status) {
});
	  return frmThird.valid();
	}
	if (stepDirection === 'backward') {
	  frmThirdValidator.resetForm();
	}
  }
// step4
  if (currentIndex === 3) {
	if (stepDirection === 'forward') {
var quoteform = $('#frmFour').serializeArray();
$.post("maingetaQuote3.php", {
json_data_four: quoteform
}, function (data, status) {
});
	  return frmFour.valid();
	}
	if (stepDirection === 'backward') {
	  frmFourValidator.resetForm();
	}
  }
// step5
  if (currentIndex === 4) {
	  
	$.get("maingetaQuote4.php", function(data, status){
    $('.response_fifth').html(data);
  });
	if (stepDirection === 'forward') {
var quoteform = $('#frmFive').serializeArray();
$.post("maingetaQuote4.php", {
json_data_five: quoteform
}, function (data, status) {
	
});
	  return frmFive.valid();
	}
	if (stepDirection === 'backward') {
	  frmFiveValidator.resetForm();
	}
  }
  // step6
  if (currentIndex === 5) {
	if (stepDirection === 'forward') {
var quoteform = $('#frmSix').serializeArray();
$.post("maingetaQuote5.php", {
json_data_six: quoteform
}, function (data, status) {
});
	  return frmSix.valid();
	}
	if (stepDirection === 'backward') {
	  frmSixValidator.resetForm();
	}
  }
  return true;
},
onFinish: function () {
  //alert('Wizard Completed');
$( "#frmSix" ).submit();
}
});
</script>
<script>
$(".child1").hide();
$(".child2").hide();
$("#child1_idnumber_option").on("click",function(e){
$(".child1").toggle();
$(".child1idnumber").toggle();

});
$("#child2_idnumber_option").on("click",function(e){
$(".child2").toggle();
$(".child2idnumber").toggle();

});
$(".se-pre-con-inner").hide();
$(".benefittype").on("click",function(e){
$(".se-pre-con-inner").show();
var optionvalue = $(this).val();
var plan = $.session.get('plan');
if(plan == undefined){

}else{
var planname = $.session.get('planname');
$.post("readRecords.php", {
plan: plan,
planname: planname,
option: optionvalue
}, function (data, status) {
$(".records_content").html(data);
$(".se-pre-con-inner").hide();
});
}
}); 
</script>
<script>
$(document).ready(function () {
$('body').on('click', '.deleteproduct', function () {
var plan = "hi";
$.post("deleteproducts.php", {
plan: plan
}, function (data, status) {
	alert(data);
	$("input[name='plan']").prop("checked", false);
$("input[name='plan-desk']").prop("checked", false);

});

});
});
</script>