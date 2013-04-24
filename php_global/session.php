<?php 

	session_start();
	
	include_once '../users/users_col.php';
	$user_index = $_SESSION[$index_col]; 
	
	if(!empty($user_index)){
		
		$sql = " select * $users where $index_col=$user_index ";
		
		
	}

?>