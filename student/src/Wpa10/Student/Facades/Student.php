<?php 
namespace Wpa10\Student\Facades;

use Illuminate\Support\Facades\Facade;

class Student extends Facade {

	protected static function getFacadeAccessor() {
		return 'student';
	}

	public static function greeting() {
		return "Hello from Facade!";
	}

}

 ?>