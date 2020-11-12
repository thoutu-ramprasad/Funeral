<?php 
session_start();
$json = $_POST['json_data_three'];
$_SESSION['json_data_three'] = $json;
//$jsondata = $_SESSION['json_data'] = $_POST['json_data'];
//echo json_encode($jsondata,true);
?>