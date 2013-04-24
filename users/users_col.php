<?php 

	$index_col = "USER_INDEX";
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
	$regdate_col = "USER_REGDATE";
	
	$users = "users";
	
	if(isset($_REQUEST[$pwd_col]))
		$pwd = sha1($_REQUEST[$pwd_col]."lpmhc");
	
	if(isset($_REQUEST[$email_col]))
		$email = $_REQUEST[$email_col];

?>