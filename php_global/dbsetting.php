<?php 

	$host = "10.0.1.2";
	$name = "dbuser";
	$pwd = "a18122242";
	$schema = "lpm";
	
	//$con = mysqli_connect($host, $name, $pwd, $schema);
	
	$mysqli = new mysqli($host, $name, $pwd, $schema);
	
	if (mysqli_connect_errno()) {
		
		$msg = "Connect failed: %s\n".mysqli_connect_error();
		$response["msg"] = $msg;
		$response["valid"] = false;
		
		$encoded = urldecode(json_encode($response));
		exit($encoded);
		
	    //printf();
	    //exit();
	    
	}

?>