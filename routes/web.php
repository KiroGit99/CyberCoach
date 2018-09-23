<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//DEFAULT USER = STUDENT

//DEFAULT ROUTE
Route::get('/', function () {
    return view('student-login');
});

//LOGIN ROUTES
Route::get('/teacher/login', function () {
    return view('teacher-login');
});
Route::get('/admin/login', function () {
    return view('admin-login');
});


//POST LOGIN ROUTE FOR TEACHER
Route::post('/teacher/login', 'Auth\TeacherLoginController@login');

//POST LOGIN ROUTE FOR ADMIN
Route::post('/admin/login', 'Auth\AdminLoginController@login');


//ROUTES WHEN ADMIN IS LOGGED IN
Route::group(['prefix' => 'admin','middleware' => 'assign.guard:admin,admin/login'],function(){
	
	Route::get('home',function ()
	{
		return view('admin.dashboard');
	});

});

//ADD USER ACCOUNT USING ADMIN
Route::post('admin/addAccount', 'Auth\AdminRegisterController@checkType');

//ROUTES WHEN TEACHER IS LOGGED IN
Route::group(['prefix' => 'teacher','middleware' => 'assign.guard:teacher,teacher/login'],function(){
	Route::get('home',function ()
	{
		return view('teacher.dashboard');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
