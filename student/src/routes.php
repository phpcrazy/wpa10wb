<?php

Route::get('/', 'StudentController@actionIndex');
Route::get('/all-students', 'StudentController@allStudents');
Route::get('/php-foundation', 'StudentController@phpFoundation');
Route::get('/php-advanced', 'StudentController@phpAdvanced');
Route::get('/login', 'StudentContorller@login');
Route::any('/add-student', 'StudentController@addStudent');
Route::get('/detail/{id}', 'StudentController@detail');
Route::group(array('before' => 'auth'), function(){

});
?>