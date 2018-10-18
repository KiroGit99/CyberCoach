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
	
	Route::get('home','AdminHomeController@index');

});

//ADD USER ACCOUNT USING ADMIN
Route::post('admin/addAccount', 'Auth\AdminRegisterController@checkType');


//ROUTES WHEN TEACHER IS LOGGED IN
Route::group(['prefix' => 'teacher','middleware' => 'assign.guard:teacher,teacher/login'],function(){
	Route::get('home', 'TeacherHomeController@index');
});

//TEACHER - UPLOAD FILE
Route::post('/uploadFile', ['middleware' => 'assign.guard:teacher,teacher/login', 'uses' => 'LessonController@upload']);
Route::post('/addComment', ['middleware' => 'assign.guard:teacher,teacher/login', 'uses' => 'ForumController@addComment']);
Route::post('/addAnnouncement', ['middleware' => 'assign.guard:teacher,teacher/login', 'uses' => 'AnnouncementController@addAnnouncement']);

//DISCUSSION FORUM ROUTES
Route::get('/forum/{i}', 'ForumController@showThread');
Route::post('/addThread', 'ForumController@addThread');
//Route::post('/addComment', 'ForumController@addComment');

//QUIZ ROUTES
Route::get('/createQuiz', function(){
    return view('teacher.quiz_creator');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
