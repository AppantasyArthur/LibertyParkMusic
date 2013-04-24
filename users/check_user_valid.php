<?php 

	

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
		
		$rememberMe = $_REQUEST['memme'];
		if($rememberMe){ // set cookie
			//$domain = "lpm.appantasy.com";
			$domain = "localhost";
			setcookie('username', $email, time() + 60*60*24*365, '/', $domain);
			setcookie('password', $pwd, time() + 60*60*24*365, '/', $domain);
		}
	
	}
	
	$mysqli->close();
	
	header('Content-type: application/json; charset=utf-8');
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>