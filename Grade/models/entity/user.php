<?php 
	/**
	* user
	*/
	class user
	{

		private $user_account;/*admin*/
		private $user_password;/*密码 123456*/

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