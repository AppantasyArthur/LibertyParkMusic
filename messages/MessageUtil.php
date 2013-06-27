<?php 

	include_once '../php_global/dbsetting.php';
	include_once '../messages/messages.php';
	include_once '../php_global/sessions.php';
	class MessageUtil{
		
		public static function getMessage($key){
			
			$tablename = Message::$table_name;
			$keyname = Message::$col_key;
			$timename = Message::$col_datetime;
			$sql = " select * from $tablename where $keyname='$key' order by $timename desc ";
			$result = $mysqli->query($sql);
			$row = $result->fetch_array();
			$result->close();
				
			return $row;
			
		}
		
		public static function saveMessage($from, $to, $body, $time, $key = null){

			$tablename = Message::$table_name;
			$fromname = Message::$col_from;
			$toname = Message::$col_to;
			$bodyname = Message::$col_body;
			$timename = Message::$col_datetime;
			$body = $mysqli->real_escape_string($body);
			
			$keyname = Message::$col_key;
			if(is_null($key)){
				$key = date("YmdHis");
			}
			
			$sql = " insert into $tablename	($fromname, $toname, $bodyname, $timename, $keyname)
									values 	($from, $to, '$body', '$time', '$key') ";
			$mysqli->query($sql);
			return $mysqli->insert_id;
			
		}
		
		public static function getHistory(){
			
			$sess = new LPMSession();
			$mid = $sess->getMemberIndex();
			
			$tablename = Message::$table_name;
			$fromname = Message::$col_from;
			$toname = Message::$col_to;
			$datetimename = Message::$col_datetime;
			$keyname = Message::$col_key;
			
			$sql = " select * from $tablename where $fromname=$mid or $toname=$mid group by $keyname order by $datetimename desc ";
			$result = $mysqli->query($sql);
			//while ($row = $result->fetch_array()){
				
				
				
			//}
			$row = $result->fetch_array();
			$result->close();
			
			return $row;
			
		}
		
	}

?>