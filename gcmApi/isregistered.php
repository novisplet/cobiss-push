﻿<?php
 
/**
 * Registering a user device
 * Store reg id in users table
 */
header('Content-Type: text/xml; charset=utf-8');
print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
print '<GCM>';
if (isset($_REQUEST["acr"]) && isset($_REQUEST["memId"]) && isset($_REQUEST["regId"])) {
    $acr = $_REQUEST["acr"];
    $memid = $_REQUEST["memId"];
    $token = $_REQUEST["regId"]; // GCM Registration ID
    // Store user details in db
    require '../DbFunctionsGCM.php';
    require '../GCM.php';
    
	$db = new DbFunctionsGCM();
    
    if ($db->doesUserExist($acr, $memid, $token))
    	echo 'TRUE';
    // send notification
    else
    	echo 'FALSE';
   
} else {
    print 'Bad request';
}
print '</GCM>';
?>