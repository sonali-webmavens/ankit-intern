<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CompnyController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('',[HomeController::class,'index'])->middleware('setLocale');
Route::get('es',[HomeController::class,'index'])->middleware('setLocale');
Route::get('en',[HomeController::class,'index'])->middleware('setLocale');


Auth::routes(['verify' => true]);

Route::resource('admin', 'App\Http\Controllers\Admin\AdminController')->middleware('auth')->middleware('setLocale');

Route::resource('compony', 'App\Http\Controllers\CompnyController')->middleware('auth')->middleware('setLocale');
Route::resource('employ', 'App\Http\Controllers\EmployController')->middleware('auth')->middleware('setLocale');

Route::get('search',[HomeController::class,'index']);
// Route::get('mail_company',[CompnyController::class,'send_mail']);


//just for unit testing
Route::delete('/compny/{id}', [CompnyController::class, 'destroy'])->name('compny.destroy');




