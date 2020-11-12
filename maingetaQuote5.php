<?php 
session_start();
$json = $_POST['json_data_six'];
$_SESSION['json_data_six'] = $json;
//$jsondata = $_SESSION['json_data'] = $_POST['json_data'];
//echo json_encode($jsondata,true);
?>