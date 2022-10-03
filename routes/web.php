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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\TeacherController:: class,'index']);
Route::get('/add-data',[\App\Http\Controllers\TeacherController:: class,'AddData']);
Route::post('/form',[\App\Http\Controllers\TeacherController:: class,'insertForm']);
Route::get('/edit/{id}',[\App\Http\Controllers\TeacherController:: class,'editData']);
Route::post('/update',[\App\Http\Controllers\TeacherController:: class,'updateData']);
Route::post('/delete',[\App\Http\Controllers\TeacherController:: class,'deleteData']);


