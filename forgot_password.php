<?php include('header.php');

if(isset($_POST['submit']))
{

$email = $_POST['emailaddress'];
$ch = curl_init();
$url = "https://telkomtest.cloudcover.insure/apiForgotPassword?eMailAddress=$email";
$getUrl = $url;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);

    //echo $response;
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");
    $array = json_decode(json_encode($xml), TRUE);
	if($email == ""){
	$failedresponse  = $array['ServiceErrors']['Error']['ErrorDescription'];
	}else{
	$failedresponse  = $array['ServiceErrors']['Error']['ErrorRecommendation'];
	$successresponse  = $array['Response'];
	if($successresponse){
		echo '<script>window.location.href = "./check_mail";</script>';
	}else{
		echo $failedresponse;
	}
	}
	
                                                          
 
curl_close($ch);



}

?>  
    <!-- apply_form_area -->
    <div class="apply_form_area bg-blue">
        <div class="container-fluid p-0">
            
                 <form role="form" method="post">
                 
                    <!-- step3 -->
                                <div class="row no-gutters">
                                    <div class="col-lg-6 order-lg-1 col-md-6 order-md-1 col-sm-12 order-sm-2 my-auto wow fadeInUp" data-wow-delay=".2s" style="padding: 7rem">
                                       <div class="forgot-profile">
                                        <div class="content">
                                            <div class="tool">
                                                <h3 class="panel-title ls-minus-2 f-48 l-52 color-navy" style="position:absolute;top:12px">Forgot password</h3>
                                               <span class="l-20 f-12 ls-m-0 blue-gray" style="font-weight: 300;">Enter the email address associated with your account</span>
                                               </div>
                                   
                                        </div>
                                        <div class="form mb-4">
                                  
                                        <div class="row">	
                                         <div class="col-lg-12 mt-4">
                                         <div class="single_input">
                                                        <div class="mt-10 wide position-relative">
                                                            <label class="left f-12 l-17 m-0 color-grey mt-4" for="username">Email address</label><input type="text" name="emailaddress" id="emailaddress" autocomplete="off" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email address'"  class="single-input p-0 transparent-input">
                                                            
                                                        </div>
                                                     
                                                      
                                                  
                                                     
                                                    </div>
													<?php if(isset($failedresponse)){?>
										<span class="color-red w-100 mt-5 failedresponse"><?php echo $failedresponse; ?></span>
										<?php } ?>
													
                                         
                                         </div>
                                           </div>   
                                           
                                       
                                      
                                      
                                              
                                        </div>
                                        
										<div class="button-group-area mt-5 w-100">
                                            <a href="./" class="genric-btn color-azure-blue border-azure-blue large preBtn w-30 font-strong border-3x uppercase bg-color-gray">Cancel</a>
                                            <input type="submit" name="submit" class="login-submit genric-btn success-border large w-30 bg-azure-blue color-white font-strong border-3x mb-3 uppercase" value="Reset password"/>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                        </div>
                  </form>
                        
                    </div>
                    
        </div>
    </div>
    <!--/ apply_form_area -->


    <?php include('footer.php'); ?>