<?php

	include_once '../session/sessions.php';
	
	class LPMLogin{
		
		private $username = null;
		private $password = null;
		public function LPMLogin($username = null, $password = null){
			
			if(!empty($username) && !empty($password)){
				
				$this->username = $username;
				$this->password = $password;
				
			}
			
		}
		
		public function isValidUser(){
			
			$sql = " select  ";
			
		}
		
	}

?>