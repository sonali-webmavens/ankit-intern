<?php

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\CompnyController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

use App\Livewire\Employee\EmployeeComponent;
use App\Livewire\Product\AddProductComponent;
use App\Livewire\Product\EditProductComponent;
use App\Livewire\Product\ProductComponent;

use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->middleware('setLocale');
Route::get('es', [HomeController::class, 'index'])->middleware('setLocale');
Route::get('en', [HomeController::class, 'index'])->middleware('setLocale');


Auth::routes(['verify' => true]);

Route::resource('admin', 'App\Http\Controllers\Admin\AdminController')->middleware('auth')->middleware('setLocale');

Route::resource('compony', 'App\Http\Controllers\CompnyController')->middleware('auth')->middleware('setLocale');
Route::resource('employ', 'App\Http\Controllers\EmployController')->middleware('auth')->middleware('setLocale');
Route::get('serchname', [EmployController::class, 'data_table'])->name('users.index');

Route::get('search', [HomeController::class, 'index']);
// Route::get('mail_company',[CompnyController::class,'send_mail']);

Route::get('products', ProductComponent::class)->name('allProducts');
Route::get('products/add', AddProductComponent::class)->name('addProducts');
Route::get('products/edit/{id}', EditProductComponent::class)->name('editProducts');
Route::get('Emloyee', EmployeeComponent::class)->name('allEmployee');



//just for unit testing
Route::delete('/compny/{id}', [CompnyController::class, 'destroy'])->name('compny.destroy');
