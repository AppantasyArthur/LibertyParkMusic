<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../messages/messages.php';
	include_once '../messages/MessageUtil.php';
	
	$history = MessageUtil::getHistory();
	$response[Message::$history_name] = $history;
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>