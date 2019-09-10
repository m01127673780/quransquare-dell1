<?php

Route::group(['middleware' => 'Maintenance'], function () {

// -----------------
					Route::get('/','WhyusStyle@show');
					Route::post('insert/news','WhyusStyle@insert');
					Route::post('user/register','WhyusStyle@insert_contact');
					Route::get('student','StudentStyle@show');
					Route::post('insert/student','StudentStyle@insert_student');
 					// Route::get('register','RegisterStyle@insert_student');
					// Route::get('student','RegisterStyle@show');
					// Route::get('student','RegisterStyle@insert_student');
					// Route::get('register','RegisterStyle@show');

 					// Route::get('/','CoursesStyle@test');


//------------------
		
	});

Route::get('maintenance', function () {

		if (setting()->status == 'open') {
			return redirect('/');
		}
		return view('style.maintenance');
	});
