<?php

	require_once __DIR__.'/../entity/student.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class studentDao
	{


		public function findStudentByID($student_id)
		{

			$student = new student();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;


			$sql = "SELECT * FROM student WHERE stuid='".$student_id."';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


  			$student->stuid = $row['stuid'];
  			$student->stuname = $row['stuname'];

  			$dbCon->closeConnect();


  			return $student;

		}


	}
?>