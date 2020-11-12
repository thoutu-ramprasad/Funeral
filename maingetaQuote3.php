<?php 
session_start();
$json = $_POST['json_data_four'];
$_SESSION['json_data_four'] = $json;
//$jsondata = $_SESSION['json_data'] = $_POST['json_data'];
//echo json_encode($jsondata,true);
?>