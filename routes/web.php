<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::POST('/upload_doctor',[AdminController::class,'upload']);
Route::POST('/appointment',[HomeController::class,'appointment']);
Route::GET('/myappointment',[HomeController::class,'myappointment']);
Route::GET('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
Route::GET('/show_appointment',[AdminController::class,'show_appointment']);
Route::GET('/approved/{id}',[AdminController::class,'approved']);
Route::GET('/cancel/{id}',[AdminController::class,'cancel']);
Route::GET('/showdoctor',[AdminController::class,'showdoctor']);