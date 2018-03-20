<?php 
	require_once __DIR__.'/../dao/userDao.php';


	/**
	* services for user
	*/
	class userService{
		
		public function userLogin($user){	

			/*传入的user:scanSingleUser函数返回的user变量；
			userdb：userDao类中findUserInfoByAccount函数返回的user变量*/

			$userDao = new userDao();
			$userdb = new user();
			$userdb = $userDao->findUserInfoByAccount($user->user_account);

			if($userdb == NULL){
				echo "NULL user";
				return 0;
			}
			if($userdb->user_password!=$user->user_password){
				echo "Password error";
				return 1;
			}

			else{
				echo "success";
				return 2;
			}
		}

	}
 ?>