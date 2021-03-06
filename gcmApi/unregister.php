<?php
 
/**
 * Unsubscribes the specified token to messages for the membership 
 * specified by the acronym and membership id.
 */
header('Content-Type: text/xml; charset=utf-8');
print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
print '<GCM>';
if (isset($_REQUEST["acr"]) && isset($_REQUEST["memId"]) && isset($_REQUEST["regId"])) {
    $acr = $_REQUEST["acr"];
    $memid = $_REQUEST["memId"];
    $token = $_REQUEST["regId"]; // GCM Registration ID
    // Store user details in db
    require '../lib/DbFunctionsGCM.php';
    
	$db = new DbFunctionsGCM();
    
    $res = $db->deleteUser($acr, $memid, $token);
 
    if (!$db->doesUserExist($acr, $memid, $token))
    	echo 'OK';
    else
    	echo 'FAILED';
    
    //print $res;
} else {
    print 'Bad request';
}
print '</GCM>';
?>