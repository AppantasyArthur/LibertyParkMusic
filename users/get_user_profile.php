<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../php_global/dbsetting.php';
	
	include_once 'users_col.php';
	
	if(isset($_COOKIE['username'])){
		
		$email = $_COOKIE['username'];
		$sql = " select * from $users where $email_col='$email' ";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		//printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
		
		$response["data"] = $row;
		
		/* free result set */
		$result->free();
		
	}else{
		
		$response["msg"] = "sign in first please";
		$response["valid"] = false;
		
	}
	
	
	
	/* close connection */
	$mysqli->close();
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>