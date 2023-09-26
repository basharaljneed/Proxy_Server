<?php

use App\Http\Controllers\ClientController;
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
    return view('mainpage');
});

Route::get('showall',[ClientController::class,'getallposts'])->name('showall');
Route::get('show/{id}',[ClientController::class,'getonepost'])->name('show');
Route::post('add',[ClientController::class,'addpost'])->name('add');
Route::put('update',[ClientController::class,'updatepost'])->name('update');
Route::get('updatepage',[ClientController::class,'show'])->name('updatepage');
Route::get('update',[ClientController::class,'update'])->name('update');
Route::get('delt/{id}',[ClientController::class,'destroy'])->name('delt');


