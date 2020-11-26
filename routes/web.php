<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Postcontroller;
use App\Post;
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

Route::view('home','index');

Route::get('login',[Usercontroller::class,'getLogin'])->name('login');

Route::get('register',[Usercontroller::class,'getRegister'])->name('register');


Route::post('register',[Usercontroller::class,'setRegister']);


Route::post('login',[Usercontroller::class,'setLogin'])->name('loginpage');

Route::get('dashboard',[Postcontroller::class,'index'])->name('dashboard');

Route::post('sendpost',[Postcontroller::class,'sendPost']);

Route::get('delete/{id}',[Postcontroller::class,'deletePost']);

Route::get('edit/{id}',[Postcontroller::class,'editPost']);

Route::post('savepost/{id}',[Postcontroller::class,'savePost']);

Route::get('logout',[Usercontroller::class,'logout']);
