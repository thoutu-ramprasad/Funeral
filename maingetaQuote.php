<?php 
session_start();
$json = $_POST['json_data_one'];
$_SESSION['json_data_one'] = $json;
//$jsondata = $_SESSION['json_data'] = $_POST['json_data'];
//echo json_encode($jsondata,true);
?>