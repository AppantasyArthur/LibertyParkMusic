<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../messages/messages.php';
	include_once '../messages/MessageUtil.php';
	
	$keyname = Message::$col_key;
	$key = $_REQUEST[$keyname];
	$message = MessageUtil::getHistory($key);
	$response[Message::$message_name] = $message;
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>