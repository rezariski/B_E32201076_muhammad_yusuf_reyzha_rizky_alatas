<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\frontend\HomeController; 
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\jejakkoding\jejakkoding; 




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

//Route::group(['namespace' => 'frontend'], function()
    
        Route::resource('home', HomeController::class);
        Route::resource('dashboard', DashboardController::class);
      //  Route::resource('/', jejakkoding::class);


 //   });

 Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/gambar', function () {
    return view('image');
});


Route::get('/hello', function () {
	return 'Hello World';
});

Route::get('/welcome', function() {
	echo '<h1><center>Selamat Datang</center></h1>';
	echo '<h2><center>Selamat Belajar</center></h2>';
});

Route::get('page/{nomor}', function ($nomor) {
    return 'Ini Halaman ke- '.$nomor;
});

Route::get('user', [ManagementUserController::class, 'index']);

Route::resource('user', ManagementUserController::class);
Auth::routes();

