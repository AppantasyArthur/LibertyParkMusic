<?php

	class LPMSession{
		
		public function LPMSession(){
			
			session_start();
			
			//if(isset($_SESSION[self::$MINDEX])){
			//	$member_index = $_SESSION[self::$MINDEX];
			//}
			
		}
		
		//private $memberIndex = null;
		private static $MINDEX = "member_index";
		private static $MNAME = "member_name";
		
		private static $MUSERNAME = "member_username";
		private static $MPASSWORD = "member_password";
		
		public function setMemberIndex($memberIndex){
			$_SESSION[self::$MINDEX] = $memberIndex;
		}
		
		public function getMemberIndex(){
			return $_SESSION[self::$MINDEX];
		}
		
		public function setMemberName($member_name){
			$_SESSION[self::$MNAME] = $member_name;
		}
		
		public function getMemberName(){
			return $_SESSION[self::$MNAME];
		}
		
		public function setMemberUsername($member_username){
			$_SESSION[self::$MUSERNAME] = $member_username;
		}
		
		public function getMemberUsername(){
			return $_SESSION[self::$MUSERNAME];
		}
		
		public function setMemberPassword($member_password){
			$_SESSION[self::$MPASSWORD] = $member_password;
		}
		
		public function getMemberPassword(){
			return $_SESSION[self::$MPASSWORD];
		}
		
		public function isLogin(){
			if(isset($_SESSION[self::$MUSERNAME]) && $_SESSION[self::$MPASSWORD]){
				return true;
			}else{
				return false;
			}
		}
		
	}

?>