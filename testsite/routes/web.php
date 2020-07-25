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


use App\PurchaseOrder;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes(['verify' => true]);
  
Route::get('/home', 'HomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('refresh_captcha', 'CaptchaController@refreshCaptcha')->name('refresh_captcha'); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});



Route::group(['middleware' => 'App\Http\Middleware\teacherMiddleware'], function()
{
	Route::get('/teacherdash','TeacherController@index')->middleware('auth');
	Route::any('/searchteacher','TeacherController@searchteacher')->name('searchteacher');
	Route::get('answerquestion/{id}','TeacherController@answerquestion');
	Route::post('saveanswer','TeacherController@saveanswer')->name('saveanswer');
});

Route::group(['middleware' => 'App\Http\Middleware\studentMiddleware'], function()
{
	Route::any('/searchstudent','StudentController@searchstudent')->name('searchstudent');
	Route::get('/studentdash','StudentController@index')->middleware('auth');   
	Route::get('/askquestion','StudentController@askquestion')->name('askquestion');
	Route::post('/savequestion','StudentController@savequestion')->name('savequestion');
	Route::get('/allquestions','StudentController@allquestions')->name('allquestions');

});


	Route::get('getanswerimage/{id}','HomeController@getanswerimage');
	Route::get('getquestionimage/{id}','HomeController@getquestionimage');
	Route::get('answerquestion/answerimage/{id}','HomeController@getquestionimage');
	Route::get('answer/{id}','HomeController@answerquestion');
	Route::get('answer/getquestionimage/{id}','HomeController@getquestionimage');
	Route::get('answer/getanswerimage/{id}','HomeController@getanswerimage');
