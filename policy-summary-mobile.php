<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 la-display-m familyadded" id="headingThree">
<div class="row bg-blue-gredient p-10 border-5x res-summary mt-3 mb-4">
<div class="col-12 mt-3">
              <div class="bg"></div>
            </div>
<div class="col-8">
<h2 class="text-left f-24 l-36 ls-minus-2 color-white res-summary"> 
	<button type="button" class="p-0 text-left f-24 l-36 ls-minus-2 color-white res-summary btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseThree" style="text-decoration:none;">Your policy summary</button>
</h2>
</div>
<div class="col-4 text-right">
	<label class="color-white f-20 l-50 ls-0-56 font-strong m-0"><?php echo $premium; ?></label>
</div>
<div class="col-12 text-right">
	<label class="color-white f-14 l-22 ls-0-18 res-premiun">monthly premium</label>
</div>
<div id="collapseThree" class="col-12 collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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
                                  <div class="extendedfamilyresponse"></div>
                                  <a href="#" class="genric-btn info bold-letters get-a-quote width-full azure-blue bg-white mt-3 pt-10 pb-10 uppercase" onClick="redirect()">give me a call</a>
                                  <p class="wow text-center f-14 mt-2 animated animated animated animated animated animated" style="visibility: visible;">Need assistance? We'll call you.</p>
                                </div>
                                </div>
</div>
</div>