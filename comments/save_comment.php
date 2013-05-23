<?php 

	header('Content-type: application/json; charset=utf-8');

	include_once '../php_global/dbsetting.php';
	include_once '../comments/comments.php';
	
	$content = $_REQUEST[$CMT_COL_CONTENT];
	
	$response[$CMT_COL_CONTENT] = $content;
	$response[$CMT_COL_DATE] = date("Y-m-d H:i:s");
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);
	

?>