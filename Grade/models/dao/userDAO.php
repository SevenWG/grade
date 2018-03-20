<?php
	/**
	*user DAO
	*/
	require_once __DIR__.'/../entity/user.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class userDao{

		/*
		查看用户信息
		input:用户account
		return: user 对象
		*/
		public function findUserInfoByAccount($user_account){
			/*
			新建user对象
			*/
			$user = new user();

			/*
			新建数据库连接
			*/
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;


			$sql = "SELECT * FROM user WHERE uaccount='".$user_account."';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			/*
			将从数据库找到的user信息赋值给user对象
			由于写过set方法，private属性可以直接赋值
			*/

  			$user->user_account = $row['uaccount'];
  			$user->user_password = $row['upwd'];

  			/*
			关闭数据库连接
			*/
  			$dbCon->closeConnect();

  			/*
			将user对象返回给service类
			*/
  			return $user;

		}


	}
?>