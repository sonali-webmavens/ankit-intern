<?php

use App\Http\Controllers\CompnyController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);


Auth::routes(['verify' => true]);


// Route::middleware(['auth','verify'])->group(function (){

// Route::resource('compony', 'App\Http\Controllers\CompnyController');
// Route::resource('employ', 'App\Http\Controllers\EmployController');

// });

Route::resource('compony', 'App\Http\Controllers\CompnyController')->middleware('auth');
Route::resource('employ', 'App\Http\Controllers\EmployController')->middleware('auth');



