<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../php_global/dbsetting.php';
	
	$filename = '/Appantasy/GitHubRepo/LibertyParkMusic/lesson/pdfTest.pdf';
	$content = shell_exec('/usr/local/bin/pdftotext '.$filename.' -');
	$response["pdftext"] = $content;
	$response["filename"] = $_REQUEST['file'];
	
	$mysqli->close();
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>