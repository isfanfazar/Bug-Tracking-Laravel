<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/createbug', [CreateController::class,'index'])->name('createbug');
Route::get('/createbug/add',[CreateController::class,'add']);
Route::post('/createbug/insert',[CreateController::class,'insert']);
Route::get('/createbug/detail/{id}', [CreateController::class,'detail']);
Route::get('/createbug/edit/{id}',[CreateController::class,'edit']);
Route::post('/createbug/update/{id}',[CreateController::class,'update']);

Route::get('/updatebug', [UpdateController::class,'index']);
Route::get('/deletebug', [DeleteController::class,'index']);

Route::get('/viewbugs', [ViewController::class,'index']);
Route::get('/viewbugs/add',[ViewController::class,'add']);
Route::post('/viewbugs/insert',[ViewController::class,'insert']);



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