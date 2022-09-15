<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\{
    homeController,
    AdminController,
    UserContoller,
    NilaiController,
    MateriController,
    AuthController,
    RegisterController
};

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

// Auth
Route::get('/login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@authencicate')->name('authencicate');


Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register');
Route::post('/register', 'App\Http\Controllers\RegisterController@store')->name('register-store');

// Route Admin
Route::middleware(['admin'])->group(function () {
    Route::get('admin/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::get('/materiAdmin', 'App\Http\Controllers\MateriController@index')->name('admin.materi');
    Route::get('/nilaiAdmin', 'App\Http\Controllers\NilaiController@index')->name('admin.nilai');
    Route::get('/addNilai', 'App\Http\Controllers\NilaiController@create')->name('input-nilai');
    Route::get('/tarunaAdmin', 'App\Http\Controllers\TarunaController@index')->name('admin.taruna');
    Route::get('/addTaruna', 'App\Http\Controllers\TarunaController@create')->name('input-taruna');
    Route::get('/userAdmin', 'App\Http\Controllers\UserController@index')->name('admin.user');
    Route::get('/addUser', 'App\Http\Controllers\UserController@create')->name('input-user');
});

// Route User
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user.index');

// Route Halaman Awal
Route::get('/', 'App\Http\Controllers\homeController@index');
Route::get('/nilai', function () {
    return view('layouts.nilai.index');
});
Route::get('/materi', function () {
    return view('layouts.materi.index');
});
