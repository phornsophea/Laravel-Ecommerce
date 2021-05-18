<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnds\HomeController;
use App\Http\Controllers\Frontend\StudentController;
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



Auth::routes();

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/', [StudentController::class, 'index']);


Route::group(['prefix'=>'admin' ,'middleware' => ['auth'],'namespace' => 'Admin'],function(){
   Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
   Route::get('/form', [HomeController::class, 'forms'])->name('admin_form');
});

// Route::get('/home', [HomeController::class, 'index']);
// Route:get(['middleware'=>['auth']],function(){
// 	Route::post('', [App\Http\Controllers\StudentController::class, 'student'])->name('admin_student');
// });
