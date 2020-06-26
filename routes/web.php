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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
//Auth::routes(['verify' => true]); kl mau verification
Route::get('/home', 'HomeController@index')->name('home'); //->middleware('verified');
Route::get('/form', 'HomeController@form')->name('form');
Route::get('/3akuntansi', 'HomeController@Akuntansitiga')->name('3akuntansi');
Route::get('/3pajak', 'HomeController@Pajaktiga')->name('3pajak');
Route::get('/3pbb', 'HomeController@Pbbtiga')->name('3pbb');
Route::get('/3beacukai', 'HomeController@Beacukaitiga')->name('3beacukai');
Route::get('/3kbn', 'HomeController@Kbntiga')->name('3kbn');
Route::get('/3manset', 'HomeController@Mansettiga')->name('3manset');
Route::get('/1pajak', 'HomeController@Pajaksatu')->name('1pajak');
Route::get('/1beacukai', 'HomeController@Beacukaisatu')->name('1beacukai');
Route::get('/1kbn', 'HomeController@Kbnsatu')->name('1kbn');

Route::get('users.destroy/{id}', 'UsersController@destroy')->name('users.destroy');
Route::get('users.update/{id}', 'UsersController@update')->name('users.update');
Route::get('edit', 'UsersController@edit')->name('edit');
Route::get('landing', 'HomeController@landing')->name('landing');

Route::get('student','UsersController@index');
Route::post('student','UsersController@store')->name('student.store');
Route::get('student/{id}/edit', 'UsersController@edit')->name('student.edit');
Route::post('student/update', 'UsersController@update')->name('student.update');
Route::get('student/{id}/delete', 'UsersController@destroy')->name('student.delete');
Route::get('/member', 'HomeController@member')->name('member');

