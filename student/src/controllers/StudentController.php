<?php 

class StudentController extends BaseController {

	public function actionIndex() {
		return View::make('student::index');
	}

	public function allStudents() {
		$sql = 'SELECT 
		students.id,
		students.name,
		students.address,
		classes.name AS class_name
		FROM students, classes
		WHERE students.class_id = classes.id';
		$students = DB::select($sql);
		return View::make('student::allstudents')
		->with('students', $students);
	}

	public function phpFoundation() {
		$sql = 'SELECT 
		students.id,
		students.name,
		students.address,
		classes.name AS class_name
		FROM students, classes
		WHERE students.class_id = classes.id
		AND students.class_id = 1';
		$students = DB::select($sql);
		return View::make('student::allstudents')
		->with('students', $students);
	}
	public function phpAdvanced() {
		$sql = 'SELECT 
		students.id,
		students.name,
		students.address,
		classes.name AS class_name
		FROM students, classes
		WHERE students.class_id = classes.id
		AND students.class_id = 2';
		$students = DB::select($sql);
		return View::make('student::allstudents')
		->with('students', $students);
	}

	public function detail($id) {
		$sql = 'SELECT students.id,
		students.name,
		students.address,
		classes.name AS class_name
		FROM students, classes
		WHERE students.class_id = classes.id
		AND students.id = ?';
		$sql2 = 'SELECT interests.name AS interest_name
		FROM students_interests, interests
		WHERE students_interests.interest_id = interests.id
		AND students_interests.student_id = ?
		AND interests.type = ?';
		$sql3 = 'SELECT experiences.id, experiences.name AS exp_name,
				experiences.from,
				experiences.to
				FROM experiences
				WHERE experiences.student_id = ?';
		$students = DB::select($sql, array($id));
		$scripts = DB::select($sql2, array($id, 'script'));
		$languages = DB::select($sql2, array($id, 'language'));
		$experiences = DB::select($sql3, array($id));
		if(count($students) == 1) {
			return View::make('student::detail')
			->with('students', $students)
			->with('scripts', $scripts)
			->with('languages', $languages)
			->with('experiences', $experiences);
		} else {
			return View::make('student::404');
		}
	}
}


?>