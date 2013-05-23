<?php 

	$CMT_COL_CONTENT = "CMT_COL_CONTENT";
	$CMT_COL_DATE = "CMT_COL_DATE";

	class Comment{
		
		private $img = null;
		private $content = null;
		private $date = null;
	
		public function getImg(){
			return $this->img;
		}
	
		public function setImg($img){
			$this->img = $img;
		}
	
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
			
			$comment["img"] = $this->img;
			$comment["content"] = $this->content;
			$comment["date"] = $this->date; 
			
			return $comment;
			
		}

	}

?>