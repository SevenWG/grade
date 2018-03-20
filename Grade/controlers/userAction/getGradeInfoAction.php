<!-- 查询成绩Aciton -->
<?php
	require_once __DIR__.'/../../models/service/functionalService.php';
	
	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$student_id = test_input($_POST["student_id"]);
		$course_id = test_input($_POST["course_id"]);
        $order = test_input($_POST["order"]);

        $functionalService = new functionalService();

        $all_score=$functionalService->getGradeInfoService($student_id,$course_id,$order);

        echo json_encode($all_score);
	}
?>