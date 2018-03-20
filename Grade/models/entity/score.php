<?php 

	class score
	{

		private $scoreid;
		private $courseid;
		private $stuid;
		private $grade;	

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