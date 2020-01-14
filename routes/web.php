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

    /*Route pakai controller*/

//use Illuminate\Routing\Route;
 use Illuminate\Support\Facades\Route;
    Route::get('/','PagesController@home');
    Route::get('/about','PagesController@about'); 
    Route::get('/mahasiswa','MahasiswaController@index');

    //students
    Route::get('/students','StudentsController@index');
    Route::get('students/create','StudentsController@create');
    Route::get('students/{students}','StudentsController@show');  
    Route::post('/students','StudentsController@store');
    Route::delete('/students/{students}','StudentsController@destroy');
    Route::get('/students/{students}/edit','StudentsController@edit');
    Route::patch('students/{students}','StudentsController@update');
    /* Mengganti semua Route diatas*/
    //Route::resource('students', 'StudentsController');
     