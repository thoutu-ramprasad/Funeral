<?php 
$size = count($_POST['familymembertitle']);
for ($i = 0;$i < $size;$i++)
{
	echo '<p class="uppercase f-16 l-23 ls-0-5 blue-gray mt-3 ramky">'.$_POST["familymembertitle"][$i].' will get</p>
	<div class="row"> <div class="container"> <div class="col-6 pl-0"> <div class="default-select" id="default-select"> <select> <option value="1">R 10 000</option> <option value="1">R 20 000</option> <option value="1">R 30 000</option> <option value="1">R 50 000</option> <option value="1">R 70 000</option> </select> </div></div><div class="col-6"></div></div></div>
	<div class="w-100 mt-2"> <p class="f-24 l-32 ls-0-minus-2 blue-gray w-100">worth of cover for <b class="family-strong blue-gray">R 75.00</b> per month.</p><div class="azure-blue"><a href="javascript:void(0)"><span class="azure-blue f-14 l-20 ls-0-5 uppercase mr-2 family-strong">Edit</span></a> | <a href="javascript:void(0)"><span class=" ml-2 azure-blue f-14 l-20 ls-0-5 uppercase family-strong remove_family_member">Remove</span></a></div></div>';

}
 
?>
