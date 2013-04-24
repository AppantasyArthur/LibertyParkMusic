<?php 

	header('Content-type: application/json; charset=utf-8');

	include_once '../php_global/dbsetting.php';
	
	include_once 'users_col.php';
	
	
	
	// $pwd $email
	$sql = " select * from $users where $pwd_col='$pwd' and $email_col='$email' ";
	$result = $mysqli->query($sql);
	
	if($mysqli->affected_rows == 0){
		 $response["msg"] = "no record";
		 $response["valid"] = false;
	}else{
		$response["msg"] = "$mysqli->affected_rows record(s)";
		$response["valid"] = true;
	}
	
	$mysqli->close();
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>