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
Route::get('/createbug', [CreateController::class,'index']);
Route::get('/updatebug', [UpdateController::class,'index']);
Route::get('/deletebug', [DeleteController::class,'index']);
Route::get('/viewbugs', [ViewController::class,'index']);

