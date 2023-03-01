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
    return view('welcome2');
});
Route::get('/beranda', function () {
    return view('welcome');
});
Route::middleware('auth:user')->group(function(){
    // Untuk Route.
  });
Route::get('user/login', 'Auth\AdminAuthController@getLogin')->name('user.login');
Route::post('user/login', 'Auth\AdminAuthController@postLogin');

//pengaduan
Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::Post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');

//tanggapan
Route::get('/tanggapan', 'TanggapanController@index');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::Post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/destroy/{id_tanggapan}', 'TanggapanController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
