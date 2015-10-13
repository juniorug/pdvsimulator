<?php 
    if (!isset($_SESSION)) { session_start(); }
    if( !isset($_SESSION["sessionId"]) ) {
	$_SESSION["sessionId"] = 1;
    } else if (!isset($_POST['msg'])) {
	if ($_SESSION["sessionId"] == 99999) {
	    $_SESSION["sessionId"] = 1;        
        } else {
	    $_SESSION["sessionId"] = $_SESSION["sessionId"] + 1;	
	}
    }
    if (isset($_POST['msg'])){
        $msg = $_POST['msg'];	
	$msg_selected = 'msg2';
	$div_to_show = 'ussdinterface';
	$div_to_hide = 'dealer';
    } else { 
	$msg =  '*214#';
	$msg_selected = 'msg1';
	$div_to_show = 'dealer';
	$div_to_hide = 'ussdinterface';
    }	

?>

