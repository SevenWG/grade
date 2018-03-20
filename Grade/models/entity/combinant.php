<?php 

	class combinant
	{

		private $stuid;
		private $stuname;
		private $coursename;
		private $score;	

		public function __get($key)
	    {
	        return $this->$key;
	    }

	    public function __set($key, $value)
	    {
	        $this->$key = $value;
	    }
	}
 ?>