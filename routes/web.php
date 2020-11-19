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
//     return view('login');
// });

Route::get('/', 'loginController@login');
Route::get('welcome', 'loginController@welcome');

Route::get('show', 'loginController@show');//สร้าง part show และเรียกใช้งาน funtion show ใน loginController

