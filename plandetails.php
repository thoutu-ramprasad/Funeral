<?php session_start(); ?>

<div class="row" >
                                      <div class="col-sm-4">
                                        <div class="default-select" id="default-select">
										<div class="nice-select" tabindex="0"><span class="current"><?php echo $_SESSION['coveramount']; ?></span></div>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <p class="f-24 blue-gray mt-1 l-32 mb-0">worth of cover for <b class="blue-gray family-strong"><?php echo $_SESSION['premiumamount']; ?></b> per month</p>
                                    <p class="f-24 blue-gray mt-1 l-32 mt-4">on the <b class="blue-gray family-strong"><?php echo ($_SESSION['plan'] != '') ? $_SESSION['plan'] : $planname; ?></b> plan.</p>