<?php 

	//$NOTE_CONTENT = "NOTE_CONTENT";
	//$NOTE_DATE = "NOTE_DATE";
	
	class Note{
		
		public $tableName = "notes";
		
		public $COL_CONTENT = "NOTE_CONTENT";
		public $COL_DATE = "NOTE_DATE";
		
		private $content = null;
		private $date = null;
		
		public function getContent(){
			return $this->content;
		}
		
		public function setContent($content){
			$this->content = $content;
		}
		
		public function getDate(){
			return $this->date;
		}
		
		public function setDate($date){
			$this->date = $date;
		}
		
		public function convert2Array(){
			
			$note[$this->COL_CONTENT] = $this->content;
			$note[$this->COL_DATE] = $this->date;
			
			return $note;
			
		}
		
	}

?>