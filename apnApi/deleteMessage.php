<?php
 
/**
 view-source:http://127.0.0.1/cobiss-push/apn/deleteMessage.php?mid=3
 */
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
print '<messages>';
if (isset($_REQUEST["mid"])) {
    $mid = $_REQUEST["mid"];
    // Store user details in db
    require '../lib/DbFunctionsAPN.php';
    
	$db = new DbFunctionsAPN();
    $res = $db->deleteMessage($mid);
	print "OK";
} else {
    print 'Bad request';
}
print '</messages>';
?>