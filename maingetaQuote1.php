<?php 
session_start();
$json = $_POST['json_data_two'];
$_SESSION['json_data_firstname'] = $json;
$_SESSION['json_data_familymembertitle'] = $_POST['familymembertitle'];
$_SESSION['json_data_familymemberid'] = $_POST['familymemberid'];
$_SESSION['json_data_familydateofbirth'] = $_POST['dateofbirth'];
$_SESSION['json_data_familybenefitoption'] = $_POST['benefitoption'];
$_SESSION['json_data_familycover'] = $_POST['cover'];
$_SESSION['json_data_familygender'] = $_POST['gender'];
//$_SESSION['json_data_coveramount'] = $_POST['json_data_coveramount'];
//$jsondata = $_SESSION['json_data'] = $_POST['json_data'];
//echo json_encode($_POST['familymembertitle'],true);
?>