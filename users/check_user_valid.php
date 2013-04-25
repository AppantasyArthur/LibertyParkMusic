<?php 

	

	include_once '../php_global/dbsetting.php';
	
	include_once 'users_col.php';
	
	//echo $_COOKIE['username'];
	//echo $_COOKIE['password'];
	
	
	// $pwd $email
	$sql = " select * from $users where $pwd_col='$pwd' and $email_col='$email' ";
	$result = $mysqli->query($sql);
	
	if($mysqli->affected_rows == 0){
		 $response["msg"] = "login failed";
		 $response["valid"] = false;
	}else{
		$response["msg"] = "login success";
		$response["valid"] = true;
		
		$rememberMe = $_REQUEST['memme'];
		if($rememberMe){ // set cookie
			//$domain = "lpm.appantasy.com";
			$domain = "localhost:8888";
			
			//setcookie('username', $email, time() + 60*60*24*365, '/', $domain);
			//setcookie('password', $pwd, time() + 60*60*24*365, '/', $domain);
			session_start();
			$_SESSION['username'] = $email;
			$_SESSION['password'] = $pwd;
			
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$_SESSION['mem_name'] = $row[$first_col]." ".$row[$last_col];
			
			$response['username'] = $_SESSION['username'];
			$response['password'] = $_SESSION['password'];
			
		}
	
	}
	
	$mysqli->close();
	
	header('Content-type: application/json; charset=utf-8');
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>