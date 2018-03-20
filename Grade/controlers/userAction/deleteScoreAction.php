<!-- 删除成绩Action -->
<?php 
	require_once __DIR__.'/../../models/service/functionalService.php';

	if (isset($_POST["scoreid"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{

			$scoreid = test_input($_POST["scoreid"]);

			$functionalService = new functionalService();
			if($functionalService->deleteScoreService($scoreid))
			{
				echo "<script type='text/javascript'>
  				alert('删除成功！');
  				self.location='../../views/user/grade.php';
  				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
  				alert('删除失败！');
  				self.location='../../views/user/grade.php';
  				</script>";
			}
			
		}
	}

	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>