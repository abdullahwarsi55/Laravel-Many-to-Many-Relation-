<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('create', [TestController::class,'create']);
Route::get('read', [TestController::class,'read']);
Route::get('update', [TestController::class,'update']);
Route::get('delete', [TestController::class,'delete']);
Route::get('attach', [TestController::class,'attach']);
Route::get('detach', [TestController::class,'detach']);
Route::get('sync', [TestController::class,'sync']);