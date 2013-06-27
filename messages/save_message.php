<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../messages/messages.php';
	include_once '../messages/MessageUtil.php';
	include_once '../php_global/sessions.php';
	
	$sess = new LPMSession();
	$from = $sess->getMemberIndex(); // $_REQUEST[Message::$col_from];
	$to = $_REQUEST[Message::$col_to];
	$body = $_REQUEST[Message::$col_body];
	$time = date("Y-m-d H:i:s");
	
	$lastid = MessageUtil::saveMessage($from, $to, $body, $time); 
	
	$response[Message::$col_id] = $lastid;
	$response[Message::$col_datetime] = $time;
	$response["code"] = 200;
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>