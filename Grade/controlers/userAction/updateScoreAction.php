<?php 
	require_once __DIR__.'/../../models/service/functionalService.php';

	if (isset($_POST["scoreid"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{

			$scoreid = test_input($_POST["scoreid"]);
			$grade = test_input($_POST["grade"]);

			$functionalService = new functionalService();
			if($functionalService->updateGradeService($scoreid,$grade))
			{
				echo "<script type='text/javascript'>
  				alert('修改成功！');
  				self.location='../../views/user/grade.php';
  				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
  				alert('修改失败！');
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