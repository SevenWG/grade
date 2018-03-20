<?php

	require_once __DIR__.'/../entity/score.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class scoreDao{
		/*所有学生的所有成绩 降序显示*/
		public function DescAllScore(){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;


			$sql = "SELECT * FROM score ORDER BY grade DESC;";
			$result = null;
			$result = mysqli_query($con, $sql);

			$all_score=array();
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){

					$score = new score();
					$score->scoreid = $row['scoreid'];
  					$score->stuid = $row['stuid'];
  					$score->courseid = $row['courseid'];
  					$score->grade = $row['grade'];

  					array_push($all_score, $score);
				}
			}
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


  			$dbCon->closeConnect();

  			return $all_score;

		}

		/*单个学生的所有成绩 降序显示*/
		public function DescScoreByStuID($student_id){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM score WHERE stuid='{$student_id}' ORDER BY grade DESC;";
			$result = null;
			$result = mysqli_query($con, $sql);

			$all_score=array();

			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){

					$score = new score();

					$score->scoreid = $row['scoreid'];
  					$score->stuid = $row['stuid'];
  					$score->courseid = $row['courseid'];
  					$score->grade = $row['grade'];

  					array_push($all_score, $score);
				}
			}
  			$dbCon->closeConnect();

  			return $all_score;

		}

		/*所有学生的单科成绩 降序显示*/
		public function DescScoreByCourseID($course_id){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM score WHERE courseid='{$course_id}' ORDER BY grade DESC;";
			$result = null;
			$result = mysqli_query($con, $sql);

			$all_score=array();

			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){

					$score = new score();

					$score->scoreid = $row['scoreid'];
  					$score->stuid = $row['stuid'];
  					$score->courseid = $row['courseid'];
  					$score->grade = $row['grade'];

  					array_push($all_score, $score);
				}
			}
  			$dbCon->closeConnect();

  			return $all_score;

		}

		/*查找单个学生的单科成绩*/
		public function findSingleScore($student_id,$course_id){
			$score = new score();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM score WHERE stuid='{$student_id}' AND courseid = '{$course_id}' ;";

			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


  			$score->scoreid = $row['scoreid'];
  			$score->stuid = $row['stuid'];
  			$score->courseid = $row['courseid'];
  			$score->grade = $row['grade'];

  			$dbCon->closeConnect();
  			return $score;
		}

		/*所有学生的所有成绩 升序显示*/
		public function AscAllScore(){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;


			$sql = "SELECT * FROM score  ORDER BY grade ASC;";
			$result = null;
			$result = mysqli_query($con, $sql);

			$all_score=array();
			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){

					$score = new score();
					$score->scoreid = $row['scoreid'];
  					$score->stuid = $row['stuid'];
  					$score->courseid = $row['courseid'];
  					$score->grade = $row['grade'];

  					array_push($all_score, $score);
				}
			}
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


  			$dbCon->closeConnect();

  			return $all_score;

		}

		/*单个学生的所有成绩 升序显示*/
		public function AscScoreByStuID($student_id){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM score WHERE stuid='{$student_id}' ORDER BY grade ASC;";
			$result = null;
			$result = mysqli_query($con, $sql);

			$all_score=array();

			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){

					$score = new score();

					$score->scoreid = $row['scoreid'];
  					$score->stuid = $row['stuid'];
  					$score->courseid = $row['courseid'];
  					$score->grade = $row['grade'];

  					array_push($all_score, $score);
				}
			}
  			$dbCon->closeConnect();

  			return $all_score;

		}


		/*所有学生的单科成绩 升序显示*/
		public function AscScoreByCourseID($course_id){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM score WHERE courseid='{$course_id}' ORDER BY grade ASC;";
			$result = null;
			$result = mysqli_query($con, $sql);

			$all_score=array();

			if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){

					$score = new score();

					$score->scoreid = $row['scoreid'];
  					$score->stuid = $row['stuid'];
  					$score->courseid = $row['courseid'];
  					$score->grade = $row['grade'];

  					array_push($all_score, $score);
				}
			}
  			$dbCon->closeConnect();

  			return $all_score;

		}

		/*根据scoreid，更新成绩*/
		public function UpdateScore($scoreid,$grade){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE score SET grade = '{$grade}' WHERE scoreid = '{$scoreid}';";

			if (mysqli_query($con, $sql)) {
				return true;
			}
			else{
				echo "error:".$sql."</br>".mysqli_error($con);
				return false;
			}
		}

		/*根据scoreid，删除成绩*/
		public function DeleteScore($scoreid){

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "DELETE FROM score WHERE scoreid = '{$scoreid}';";

			if (mysqli_query($con, $sql)) {
				return true;
			}
			else{
				echo "error:".$sql."</br>".mysqli_error($con);
				return false;
			}
		}
	}
?>