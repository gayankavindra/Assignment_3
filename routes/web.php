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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::resource('students', 'StudentController');

Route::get('/export_excel', 'ExportExcelController@index');

Route::get('/export_excel/excel', 'ExportExcelController@excel')->name('export_excel.excel');

Route::get('export_excel/export', 'ExportExcelController@export')->name('export_excel.export');

Route::get('/', 'CreatesController@home');
Route::get('/create', function () {
    return view('create');
});

Route::post('/insert', 'CreatesController@add')->middleware('admin');
Route::get('/update/{id}', 'CreatesController@update')->middleware('admin');
Route::post('/edit/{id}', 'CreatesController@edit')->middleware('admin');
Route::get('/read/{id}', 'CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete')->middleware('admin');