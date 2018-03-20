<!-- 用户登录页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>成绩管理系统</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" type="text/css">

  </head>

  <style>
	.error {color: #FF0000;}
  </style>

  <style type="text/css">
	body {
	  background-image: url(assets/img/userLogin.jpg);
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		 background-size:100%;
	}
	div.transbox
	{
		border-radius: 15px;
	  width:300px;
	  height:350px;
	  background-color:#ffffff;
	  opacity:0.85;
	  filter:alpha(opacity=60); /* IE8 及更早版本 */
	}

	div.inside
	{
		margin:10px;
		outline-offset:15px;
	}
 </style>

  <body>

 	<!-- 用户登录表单，调用userAction/userLoginAction.php，实现登录功能 -->
    <div class="container" style="padding: 200px 450px 150px;font-family:Microsoft YaHei;">
		 <div class="transbox">
			<div class="inside">
		      <form class="form-signin" role="form" action="controlers/userAction/userLoginAction.php" method="POST">
					</br>
						<h2 class="form-signin-heading" align="center">用户登录</h2>
		        <input type="text" id="uaccount" name="uaccount" class="form-control" placeholder="用户账号" required autofocus>
		        <input type="password" id="upwd" name="upwd" class="form-control" placeholder="密码"  required>

		        <div class="checkbox">
		          <label>
		            <input type="checkbox" value="remember-me" id="remember-user"> 记住我
		          </label>
		        </div>
		        <button class="btn btn-lg btn-primary btn-block" type="submit" name="c_submit">登录</button>
		        <a>账号admin,密码123456</a>	        
		      </form>
			</div>
			</div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/remember-user.js"></script>
    </body>
</html>