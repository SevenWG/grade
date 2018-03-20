<?php 
	require_once __DIR__.'/../entity/score.php';
	require_once __DIR__.'/../entity/combinant.php';
	require_once __DIR__.'/../entity/course.php';
	require_once __DIR__.'/../entity/student.php';

	require_once __DIR__.'/../dao/scoreDao.php';
	require_once __DIR__.'/../dao/studentDao.php';
	require_once __DIR__.'/../dao/courseDao.php';


	class functionalService{

		public function updateGradeService($scoreid,$grade){
			$scoreDao = new scoreDao();

			$result = $scoreDao->UpdateScore($scoreid,$grade);

			return $result;
		}

		public function deleteScoreService($scoreid){
			$scoreDao = new scoreDao();

			$result = $scoreDao->DeleteScore($scoreid);

			return $result;
		}
		
		public function getGradeInfoService($student_id,$course_id,$order){

			$scoreDao = new scoreDao();
			$studentDao = new studentDao();
			$courseDao = new courseDao();

			if($student_id == ""&&$course_id == "all"){

				if ($order == "desc") {
					$all_score = $scoreDao->DescAllScore();
				}
				else{
					$all_score = $scoreDao->AscAllScore();
				}

				if($all_score == NULL){
					return 0;
				}
				$all_combinant = array();

				for($i = 0; $i < count($all_score); $i++){

					$score = $all_score[$i];
					$student = $studentDao->findStudentByID($score->stuid);
					$course = $courseDao->findCourseByID($score->courseid);

					$temp = array(
						'scoreid' => $score->scoreid,
						'stuid' => $student->stuid,
						'stuname' => $student->stuname,
						'coursename' => $course->coursename,
						'grade' => $score->grade
						);

					array_push($all_combinant, $temp);

				}
				return $all_combinant;
			}


			if($student_id != ""&&$course_id == "all"){

				if ($order == "desc") {
					$all_score = $scoreDao->DescScoreByStuID($student_id);
				}
				else{
					$all_score = $scoreDao->AscScoreByStuID($student_id);
				}

				if($all_score == NULL){
					return 0;
				}

				$all_combinant = array();

				for($i = 0; $i < count($all_score); $i++){

					$score = $all_score[$i];
					$student = $studentDao->findStudentByID($score->stuid);
					$course = $courseDao->findCourseByID($score->courseid);

					$temp = array(
						'scoreid' => $score->scoreid,						
						'stuid' => $student->stuid,
						'stuname' => $student->stuname,
						'coursename' => $course->coursename,
						'grade' => $score->grade
						);

					array_push($all_combinant, $temp);

				}
				return $all_combinant;
			}

			if($student_id == ""&&$course_id != "all"){

				if ($order == "desc") {
					$all_score = $scoreDao->DescScoreByCourseID($course_id);
				}
				else{
					$all_score = $scoreDao->AscScoreByStuID($course_id);
				}

				if($all_score == NULL){
					return 0;
				}

				$all_combinant = array();

				for($i = 0; $i < count($all_score); $i++){

					$score = $all_score[$i];
					$student = $studentDao->findStudentByID($score->stuid);
					$course = $courseDao->findCourseByID($score->courseid);

					$temp = array(
						'scoreid' => $score->scoreid,
						'stuid' => $student->stuid,
						'stuname' => $student->stuname,
						'coursename' => $course->coursename,
						'grade' => $score->grade
						);

					array_push($all_combinant, $temp);

				}
				return $all_combinant;
			}


			if($student_id != ""&&$course_id != "all"){

				$score = $scoreDao->findSingleScore($student_id,$course_id);
				$student = $studentDao->findStudentByID($score->stuid);
				$course = $courseDao->findCourseByID($score->courseid);

				if($score == NULL){
					return 0;
				}

				$all_combinant = array();

					$temp = array(
						'scoreid' => $score->scoreid,
						'stuid' => $student->stuid,
						'stuname' => $student->stuname,
						'coursename' => $course->coursename,
						'grade' => $score->grade
						);

					array_push($all_combinant, $temp);

				return $all_combinant;
			}
			
		}

	}
 ?>