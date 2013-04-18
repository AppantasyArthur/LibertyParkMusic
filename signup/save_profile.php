<?php 

	$host = "10.0.1.2";
	$name = "dbuser";
	$pwd = "a18122242";
	$schema = "lpm";
	$con = mysqli_connect($host, $name, $pwd, $schema);
	
	$img_col  = "USER_IMG";
	$first_col = "USER_FIRST";
	$last_col = "USER_LAST";
	$email_col = "USER_EMAIL";
	$month_col = "USER_MONTH";
	$day_col = "USER_DAY";
	$year_col = "USER_YEAR";
	$gender_col = "USER_GENDER";
	$inters_col = "USER_INTERS";
	$lastlog_col = "USER_LAST_LOG";
	
	$pwd_col = "USER_PWD";
	$pwd = sha1($_REQUEST[$pwd_col]."lpmhc");
	$regdate_col = "USER_REGDATE";
	
	header('Content-type: application/json; charset=utf-8');
	
	$users = "users";
	
	$sql = " insert into $users ($img_col, $first_col, $last_col, $email_col, $month_col, $day_col, $year_col, $gender_col, $inters_col, $lastlog_col, $pwd_col, $regdate_col) 
						values	('$_REQUEST[$img_col]', '$_REQUEST[$first_col]', '$_REQUEST[$last_col]', '$_REQUEST[$email_col]'
						, '$_REQUEST[$month_col]', '$_REQUEST[$day_col]', '$_REQUEST[$year_col]', '$_REQUEST[$gender_col]', '$_REQUEST[$inters_col]', NOW(), '$pwd', NOW())
	";
	
	$result = mysqli_query($con, $sql);
	if(!$result){
		
		$error = mysqli_error($con);
		$response["msg"] = $error;
			
	}else{
		
		$response["msg"] = "success";
		
	}
	
	mysqli_close($con);
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>