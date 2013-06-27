<?php 

	class Message{
		
		static public $col_id = "MSG_ID";
		static public $col_from = "MSG_FROM";
		static public $col_to = "MSG_TO";
		static public $col_body = "MSG_BODY";
		static public $col_datetime = "MSG_DATETIME";
		static public $col_read = "MSG_READ";
		static public $col_key = "MSG_KEY";
		
		public static $table_name = "messages";
		public static $history_name = "history";
		public static $message_name = "message";
		
	}
	
	// Message::$col_id;

?>