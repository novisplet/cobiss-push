﻿<?php
header('Content-Type: text/html; charset=utf-8');
//echo 'vrh';
if (isset($_GET["regId"]) && isset($_GET["message"]) && isset($_GET["title"]) && isset($_GET["acr"]) && isset($_GET["memId"])) {
    $regId = $_GET["regId"];
    $message = $_GET["message"];
	$title = $_GET["title"];
	$acr = $_GET["acr"];
	$memid = $_GET["memId"];
 
	
	include_once '../lib/GCM.php';
 
    $gcm = new GCMsender();
 
    $registatoin_ids = array($regId);
    
    $result = $gcm->send_notification($registatoin_ids, $title, $message, $acr, $memid);
   
	//echo 'aafaf';
    echo $result;
}
?>