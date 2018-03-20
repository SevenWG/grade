<?php

	require_once __DIR__.'/../entity/course.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class courseDao{


		public function findCourseByID($course_id){

			$course = new course();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;


			$sql = "SELECT * FROM course WHERE courseid='".$course_id."';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


  			$course->courseid = $row['courseid'];
  			$course->coursename = $row['coursename'];

  			$dbCon->closeConnect();


  			return $course;

		}
	}
?>