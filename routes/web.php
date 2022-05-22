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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Auth\LoginController@showAdminLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');




Route::group(['middleware' =>  'auth',['role:superadmin']], function () {
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('students/list', 'StudentController@list');
    Route::get('students/create', 'StudentController@create');
    Route::post('students/store', 'StudentController@store');
    Route::get('students/{student}/edit', 'StudentController@edit');
    Route::put('students/update/{student}', 'StudentController@update');
    Route::delete('students/{student}', 'StudentController@destroy');

    Route::get('students/mark', 'StudentController@mark');
    Route::get('students/mark/list', 'StudentController@marklist');
    Route::get('students/mark/create', 'StudentController@markcreate');
    Route::post('students/mark/store', 'StudentController@markstore');
    Route::get('students/mark/{mark}/edit', 'StudentController@markedit');
    Route::put('students/mark/update/{mark}', 'StudentController@markupdate');
    Route::delete('students/mark/{mark}', 'StudentController@markdestroy');
});



