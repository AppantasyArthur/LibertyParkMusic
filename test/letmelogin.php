<?php 

	include_once '../php_global/sessions.php';
	
	$sess = new LPMSession();
	//$mid = $sess->getMemberIndex();
	$sess->setMemberIndex($_REQUEST["mid"]);
	
?>