<!-- 成绩查询主页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>成绩查询系统</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
  </head>
  <body>
<?php
  require 'header.php';
?>
<div class="container" style="font-family:Microsoft YaHei;">

	<div>
        <div class="page-header" style="padding: 0px 200px;">
          <h1 style="font-family:Microsoft YaHei;font-size:20px">填写查询信息</h1>
        </div>
        <div style="padding: 0px 350px;">
          <p style="font-family:Microsoft YaHei">学生学号(若不填写，则查询全部学生）</p>
          <input type="text" class="form-control" id="stuid" name="stuid" placeholder="学生学号" value=""><br/>

          <div class = "form-group">
           <label for = "type">课程</label>
           <select id = "course" class = "form-control" name="course">
            <option  value="001">语文</option>
            <option  value="002">数学</option>
            <option  value="003">英语</option>
            <option  value="all">全部</option>
           </select>
          </div>

          <div class = "form-group">
           <label for = "type">显示顺序</label>
           <select id = "order" class = "form-control" name="order">
            <option  value="desc">成绩降序</option>
            <option  value="asc">成绩升序</option>
           </select>
          </div>

         <button class="btn btn-lg btn-primary btn-block" id="submit" type="button" name="submit">提交</button><br/>
    	</div>

	<div class="table-responsive" style="padding: 50px 0px;">
		<table class="table">
			<caption><h2 align="center">成绩查询信息</h2></caption>
			<thead>
				<tr>
					<th>学号</th>
					<th>姓名</th>
					<th>学科</th>
          <th>分数</th>
					<th>修改</th>
          <th>删除</th>
				</tr>
			</thead>
  			<tbody id = "J_Tb">
  			</tbody>
		</table>
	</div>
</div>
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/Grade2.js"></script>
    </body>
</html>
