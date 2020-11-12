<?php 
session_start();
$json = $_POST['json_data_five'];
$_SESSION['json_data_five'] = $json;

//$jsondata = $_SESSION['json_data'] = $_POST['json_data'];


?>
<div class="row">
<div class="p-0 col-md-10 col-sm-12">
				<h3 class="panel-title f-48 l-52 color-navy ls-0-minus-2">This is the summary of your funeral plan</h3>
				<hr class="mt-78 border-top-gray">
				<div class="row">
				  <div class="col-6 text-left">
					<p class="f-24 l-32 blue-gray mt-2">Your funeral plan summary:</p>
				  </div>
				  <div class="col-6 text-right"><label class="f-30 l-50 azure-blue family-strong"><?php echo $_SESSION['finalbasicpremium']; ?></label></div>
				</div>
				<div class="response_fifth"></div>
				<hr class="border-top-gray">
				<div class="table-responsive">
				  <table class="table table-invoice">
					<thead>
					  <tr>
						<th class="border-0 f-12 l-20 gray ls-0-1 pl-0">Your funeral plan:</th>
						<th class="border-0 f-12 l-20 gray ls-0-1 pl-0"></th>
						<th class="border-0 f-12 l-20 gray ls-0-1 pl-0">Cover amount</th>
						<th class="border-0 text-right f-12 l-20 gray ls-0-1 pr-0">Monthly premium</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td class="pl-0 border-0 w-30 mb-3">
						  <span class="text-inverse f-18 l-28 azure-blue"><?php echo isset($_SESSION['plan']) ? $_SESSION['plan'] : ''; ?></span>
						  <br/>
						  <?php if($_SESSION['plan'] == 'TelFun Family' || $_SESSION['plan'] == 'TelFun Spouse'){ ?>
						  <small class="f-12 l-20 gray">Spouse: 1</small><br/>
						  <?php } ?>
						  <?php if($_SESSION['plan'] == 'TelFun Family' || $_SESSION['plan'] == 'TelFun Children'){ ?>
                                        <small class="f-12 l-20 gray">Children: <?php echo $_SESSION['childrens']; ?></small>
										<?php } ?>
						  
						  
						</td>
						<td class="pl-0 border-0">
						<span class="delicon mt-2">
							<a href="javascript:void(0);" class="deleteproduct"><svg width="14" height="17" class="delicon" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.95036 13.9266C5.14908 13.9191 5.30388 13.7524 5.29668 13.5533L4.76676 4.92303C4.75956 4.72431 4.59252 4.56951 4.3938 4.57635C4.19508 4.58391 4.03992 4.75095 4.04712 4.94967L4.5774 13.58C4.5846 13.7787 4.75164 13.9338 4.95036 13.9266ZM11.057 14.6466C11.0084 15.0264 10.7345 15.3666 10.337 15.3666H3.85703C3.45923 15.3666 3.19175 15.0304 3.13703 14.6466L2.41703 3.12664H11.777L11.057 14.6466ZM5.29703 2.40663H8.89703V0.966992H5.29703V2.40663ZM13.2172 2.40707H9.61719V0.96743C9.61719 0.56963 9.29463 0.24707 8.89719 0.24707H5.29719C4.89939 0.24707 4.57719 0.56963 4.57719 0.96743V2.40707H0.977187C0.778467 2.40707 0.617188 2.56835 0.617188 2.76743C0.617188 2.96615 0.778467 3.12707 0.977187 3.12707H1.69719L2.41719 14.6471C2.53311 15.4351 3.06195 16.0871 3.85719 16.0871H10.3372C11.1324 16.0871 11.6418 15.4272 11.7772 14.6471L12.4972 3.12707H13.2172C13.4159 3.12707 13.5772 2.96615 13.5772 2.76743C13.5772 2.56835 13.4159 2.40707 13.2172 2.40707ZM9.24536 13.9263C9.44408 13.9338 9.61112 13.7783 9.61832 13.5796L10.1403 4.94932C10.1475 4.7506 9.99236 4.58356 9.79364 4.576C9.59492 4.56916 9.42824 4.72432 9.42104 4.92304L8.89868 13.5537C8.89148 13.7524 9.04664 13.9191 9.24536 13.9263ZM7.09703 13.9266C7.29575 13.9266 7.45703 13.7657 7.45703 13.5666V4.92664C7.45703 4.72756 7.29575 4.56664 7.09703 4.56664C6.89831 4.56664 6.73703 4.72756 6.73703 4.92664V13.5666C6.73703 13.7657 6.89831 13.9266 7.09703 13.9266Z" fill="#008FE0"/>
							</svg></a>
						  </span>
						</td>
						<td class="f-18 l-28 azure-blue border-0 pl-0"><?php echo isset($_SESSION['coveramount']) ? $_SESSION['coveramount'] : ''; ?></td>
						<td class="text-right f-18 l-28 azure-blue border-0"><?php echo $_SESSION['premiumamount']; ?></td>
					  </tr>
					  <tr>
						<td class="pl-0 w-30 mb-3 mt-3">
						  <span class="text-inverse f-18 l-28 azure-blue">Extended Family Funeral</span>
						  <br/>
						  <?php for($j=0;$j<count($_SESSION['familyrelation']); $j++){ ?>
						  <p class="f-12 l-20 gray mb-0 mt-2"><?php echo $_SESSION['familyrelation'][$j]['value']; ?></p>
						  <?php } ?>
						  <?php //} ?>
						</td>
						<td class="pl-0 mt-3">
						<span class="delicon mt-2">
							<a href="javascript:void(0);" class="deleteproduct"><svg width="14" height="17" class="delicon" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.95036 13.9266C5.14908 13.9191 5.30388 13.7524 5.29668 13.5533L4.76676 4.92303C4.75956 4.72431 4.59252 4.56951 4.3938 4.57635C4.19508 4.58391 4.03992 4.75095 4.04712 4.94967L4.5774 13.58C4.5846 13.7787 4.75164 13.9338 4.95036 13.9266ZM11.057 14.6466C11.0084 15.0264 10.7345 15.3666 10.337 15.3666H3.85703C3.45923 15.3666 3.19175 15.0304 3.13703 14.6466L2.41703 3.12664H11.777L11.057 14.6466ZM5.29703 2.40663H8.89703V0.966992H5.29703V2.40663ZM13.2172 2.40707H9.61719V0.96743C9.61719 0.56963 9.29463 0.24707 8.89719 0.24707H5.29719C4.89939 0.24707 4.57719 0.56963 4.57719 0.96743V2.40707H0.977187C0.778467 2.40707 0.617188 2.56835 0.617188 2.76743C0.617188 2.96615 0.778467 3.12707 0.977187 3.12707H1.69719L2.41719 14.6471C2.53311 15.4351 3.06195 16.0871 3.85719 16.0871H10.3372C11.1324 16.0871 11.6418 15.4272 11.7772 14.6471L12.4972 3.12707H13.2172C13.4159 3.12707 13.5772 2.96615 13.5772 2.76743C13.5772 2.56835 13.4159 2.40707 13.2172 2.40707ZM9.24536 13.9263C9.44408 13.9338 9.61112 13.7783 9.61832 13.5796L10.1403 4.94932C10.1475 4.7506 9.99236 4.58356 9.79364 4.576C9.59492 4.56916 9.42824 4.72432 9.42104 4.92304L8.89868 13.5537C8.89148 13.7524 9.04664 13.9191 9.24536 13.9263ZM7.09703 13.9266C7.29575 13.9266 7.45703 13.7657 7.45703 13.5666V4.92664C7.45703 4.72756 7.29575 4.56664 7.09703 4.56664C6.89831 4.56664 6.73703 4.72756 6.73703 4.92664V13.5666C6.73703 13.7657 6.89831 13.9266 7.09703 13.9266Z" fill="#008FE0"/>
							</svg></a>
						  </span>
						</td>
						
						<td class="f-18 l-28 azure-blue mt-3 pl-0"><?php echo isset($_SESSION['familytotalbenefit']) ? $_SESSION['familytotalbenefit'] : ''; ?></td>
						<td class="text-right f-18 l-28 azure-blue mt-3"><?php echo isset($_SESSION['familytotalpremium']) ? $_SESSION['familytotalpremium'] : ''; ?></td>
					  </tr>
					</tbody>
				  </table>
				  <hr class="border-top-columbia-blue">
				  
				</div>
			  </div>
			  </div>