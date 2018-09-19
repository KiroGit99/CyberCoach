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

//REGISTRATION ROUTES (TEMPORARY)
Route::get('/admin/teacher-register', function () {
    return view('auth/teacher-register');
});
Route::get('/admin/admin-register', function () {
    return view('auth/admin-register');
});

//POST LOGIN ROUTE FOR TEACHER
Route::post('/teacher/login', 'Auth\TeacherLoginController@login');

//POST LOGIN ROUTE FOR ADMIN
Route::post('/admin/login', 'Auth\AdminLoginController@login');

//POST REGISTER ROUTE FOR TEACHER
Route::post('/teacher/register', 'Auth\TeacherRegisterController@register');

//POST REGISTER ROUTE FOR ADMIN
Route::post('/admin/register', 'Auth\AdminRegisterController@register');


//ROUTES WHEN ADMIN IS LOGGED IN
Route::group(['prefix' => 'admin','middleware' => 'assign.guard:admin,admin/login'],function(){
	
	Route::get('home',function ()
	{
		return view('admin.dashboard');
	});
});

//ROUTES WHEN TEACHER IS LOGGED IN
Route::group(['prefix' => 'teacher','middleware' => 'assign.guard:teacher,teacher/login'],function(){
	Route::get('home',function ()
	{
		return view('teacher.dashboard');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
