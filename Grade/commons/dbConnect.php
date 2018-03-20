<?php 
	/**
	* connect to database
	*/

	class dbConnect
	{
		private $host = 'localhost';
		private $username = 'root';
		private $password = '';
		private $basename = 'grade';
		public  $connect = null;
		
		public function initConnnect()
		{

			$this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->basename);
			if (!$this->connect) {
				die('connect error: '.mysqli_connect_error());
			}
			mysqli_set_charset($this->connect, 'utf8');
		}

		public function closeConnect()
		{
			$this->connect = mysqli_close($this->connect);
		}
	}
 ?>