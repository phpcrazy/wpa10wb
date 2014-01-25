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
		$students = DB::select($sql, array($id));
		if(count($students) == 1) {
			return View::make('student::detail')
				->with('students', $students);
		} else {
			return View::make('student::404');
		}
	}
}


 ?>