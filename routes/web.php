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

    // Untuk Route.

// Route::middleware('auth:user')->group(function(){
    // Route::group(['middleware'=> ['auth']], function(){
//login&regis
Route::get('beranda', 'WelcomeController@index');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/simpanregister','LoginController@simpanregister')->name('simpanregister');

Route::post('/getkabupaten', 'LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecamatan', 'LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa', 'LoginController@getdesa')->name('getdesa');

//pengaduan
Route::group(['middleware'=> ['auth']], function(){

Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::Post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::get('/pengaduan/cetak_pdf/{id_pengaduan}', 'PengaduanController@cetak_pdf');
});
Route::get('/profile/{nik}', 'UserProfileController@show');
Route::put('/profile/update/{nik}', 'UserProfileController@update');
//tanggapan
Route::group(['middleware'=> ['auth']], function(){
Route::get('/tanggapan', 'TanggapanController@index');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
Route::get('/tanggapan/destroy/{id_tanggapan}', 'TanggapanController@destroy');
Route::get('/tanggapan/update/{id_tanggapan}', 'TanggapanController@update');
Route::get('/tanggapan/show/{id_tanggapan}', 'TanggapanController@show');
Route::get('/tanggapan/cetak', 'TanggapanController@cetakTanggapan')->name('cetak');
Route::post('tanggapan/createOrUpdate',[TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
Route::group(['middleware'=> ['auth','ceklevel:user']], function(){
    // Route::middleware('auth:user')->group(function(){

    Route::get('/masyarakat', 'BerandaController@masyarakat')->name('masyarakat');

// });
});

