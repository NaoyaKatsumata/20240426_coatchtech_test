<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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



Route::middleware('auth')->group(function () {
         Route::get('/', [AuthController::class, 'index']);
         Route::post('/confirm',[ContactController::class,'confirm']);
         Route::get('/confirm',[ContactController::class,'confirm']);
         Route::post('/thanks',[ContactController::class,'store']);
         Route::get('/admin',[ContactController::class,'admin']);
         Route::post('/admin',[ContactController::class,'search']);
     });
// Route::post('/confirm',[ContactController::class,'confirm']);
// Route::get('/confirm',[ContactController::class,'confirm']);
// Route::post('/thanks',[ContactController::class,'store']);