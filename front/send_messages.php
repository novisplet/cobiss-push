﻿<?php
//echo 'vrh';
//if (isset($_GET["memId"]) && $_GET["acr"]) && isset($_GET["message"]) && isset($_GET["title"])) {
    $message = $_GET["message"];
	$title = $_GET["title"];
	$acr = $_GET["acr"];
	$memid = $_GET["memId"];
 
    include_once '../GCM.php';
 
    $gcm = new GCM();
 
    $registatoin_ids = array($regId);
    
    $result = $gcm->send_notification($registatoin_ids, $title, $message, $acr, $memid);
	//echo 'aafaf';
    echo $result;
//}
?>