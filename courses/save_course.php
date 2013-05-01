<?php 

	header('Content-type: application/json; charset=utf-8');

	include_once '../php_global/dbsetting.php';
	
	include_once 'courses_col.php';
	
	
		
	//$pwd = sha1($_REQUEST[$pwd_col]."lpmhc");

	
	$sql = " insert into $users ($img_col, $first_col, $last_col, $email_col, $month_col, $day_col, $year_col, $gender_col, $inters_col, $lastlog_col, $pwd_col, $regdate_col) 
						values	('$_REQUEST[$img_col]', '$_REQUEST[$first_col]', '$_REQUEST[$last_col]', '$_REQUEST[$email_col]'
						, '$_REQUEST[$month_col]', '$_REQUEST[$day_col]', '$_REQUEST[$year_col]', '$_REQUEST[$gender_col]', '$_REQUEST[$inters_col]', NOW(), '$pwd', NOW())
	";
	
	$result = $mysqli->query($sql);
	if(!$result){
		
		//$error = mysqli_error($con);
		$response["msg"] = $mysqli->error;
			
	}else{
		
		$response["msg"] = "success";
		
	}
	
	$mysqli->close();
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>