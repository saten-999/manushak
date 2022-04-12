<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/main');
});

Auth::routes();

Route::get('/main', 'HomeController@index')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/course',       'CourseController@index');
    Route::get('/course/{d}',   'CourseController@course');
    Route::get('/certificate',   'CourseController@certificate');

    Route::get('/course/{test}/{course}',   'CourseController@maincourse');
    Route::get('/test',     'TestController@index');
    Route::get('/test/{id}', 'TestController@show');

});

Route::get('/book',             'SubjectController@index');
Route::get('/subject',          'SubjectController@subject');
Route::get('/sub',          'SubjectController@info');



Route::prefix('admin')->group(function() {

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');

    Route::get('/course', 'CourseController@adminIndex');
    Route::post('/course',  'CourseController@store');
    Route::get('/course/{id}', 'CourseController@edit');
    Route::put('/course/{id}', 'CourseController@update');

    Route::get('/books',        'BookController@adminIndex');
    Route::post('/add-book',    'BookController@store');



    Route::get('/test', 'TestController@adminIndex');
    Route::post('/test',  'TestController@store');
    Route::get('/test/{id}', 'TestController@edit');
    Route::put('/test/{id}', 'TestController@update');


    Route::post('/test-name',  'TestController@store_test');


    Route::get('/subject', 'SubjectController@index');
    Route::post('/subject', 'SubjectController@adminIndex');

   }) ;