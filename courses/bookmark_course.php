<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../php_global/dbsetting.php';
	
	include_once 'courses_col.php';
	
	//$sql = " insert into $tbl_course ($col_course_title, $col_course_next, $col_course_goal, $col_course_tapcover, $col_course_trgaudi, $col_course_numles, $col_course_recbg, $col_course_keyword
	//,$col_course_des, $col_course_genen, $col_course_instor, $col_course_updatetime)
	//values	('$cor_title', '$cor_next', '$cor_goal', '$cor_tapcover', '$cor_trgaudi', '$cor_numles', '$cor_recbg', '$cor_keyword', '$cor_des', '$cor_genen', '$cor_instor', NOW())
	//";
	
	$act = $_REQUEST["action"];
	
	if(act == "bookmark"){
		$cid = $_REQUEST["course_id"];
		$mid = $_REQUEST["member_id"];
		$sql = " insert into bookmarks (BK_MID, BK_CID, BK_TIME)
								values ('$mid', '$cid', NOW()) ";
	}else{
		$bkid = $_REQUEST["bookmark_id"];
		$sql = " delete from bookmarks where BK_ID='$bkid' ";
	}
	
	$result = $mysqli->query($sql);
	if(!$result){
		$response["msg"] = $mysqli->error;
	}else{
	
		if(act == "bookmark"){
			
			$sql = " select BK_ID from bookmarks where BK_MID='$mid' and BK_CID='$cid' ";
			if ($stmt = $mysqli->prepare($sql)) {
				$stmt->execute();
				$stmt->bind_result($bkid);
				if ($stmt->fetch()) {
					//printf ("%s (%s)\n", $name, $code);
					$response["bkid"] = $bkid;
				}else{
					$response["bkid"] = -1;
				}
				$stmt->close();
			}
			
		}
		
		$response["msg"] = "success";
	
	}

	$mysqli->close();

	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>