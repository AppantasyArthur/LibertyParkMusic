<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../php_global/dbsetting.php';
	
	include_once '../comments/comments.php';
	
	$comment = new Comment();
	$comment->setImg('');
	// setContent
	$comment->setContent('123');
	// setDate
	$comment->setDate('2013-05-05');
	
	$response["comments"] = array($comment->convert2Array(), $comment->convert2Array());
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>