<?php

use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Notification;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompnyController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewCompntController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Livewire\Employee\EmployeeComponent;
use App\Livewire\Product\AddProductComponent;
use App\Livewire\Product\EditProductComponent;
use App\Livewire\Product\ProductComponent;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->middleware('setLocale');
Route::get('es', [HomeController::class, 'index'])->middleware('setLocale');
Route::get('en', [HomeController::class, 'index'])->middleware('setLocale');


Auth::routes(['verify' => true]);

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes (protected by auth and admin middleware)
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});

Route::resource('compony', 'App\Http\Controllers\CompnyController')->middleware('auth')->middleware('setLocale');
Route::get('companies/trashed', [CompnyController::class, 'trashed'])->name('compony.trashed');
Route::delete('companies/{id}/force-delete', [CompnyController::class, 'forceDelete'])->name('compony.forcedelete');
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

//Media Library Post
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');


//for demo mail send
Route::get('demo_mail', [MailController::class, 'sendEmail']);


Route::resource('subscriptions', SubscriptionController::class);
Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');

Route::get('list', [UserController::class, 'list'])->middleware('auth')->name('list.list');
Route::post('/sendnotificatin', [NotificationController::class, 'sendNotification'])->name('subscriptions.sendnotificatin');


Route::get('index_newCompny', [NewCompntController::class, 'index'])->name('index_newCompny.index');
Route::get('companies/export/excel', [NewCompntController::class, 'exportExcel'])->name('companies.export.excel');
Route::get('companies/export/csv', [NewCompntController::class, 'exportCsv'])->name('companies.export.csv');

Route::get('upload', [UploadController::class, 'index'])->name('upload.index');
Route::post('import', [UploadController::class, 'import'])->name('import.import');


//S3 file upload
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::get('user/show', [UserController::class, 'show'])->name('user.show');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{user}/edit', [UserController::class, 'file_upload'])->name('user.file_upload');


Route::get('/users/{user}/file-upload', [UserController::class, 'fileUpload'])->name('user.file_upload');
Route::post('/users/{user}/file-upload', [UserController::class, 'storeFiles'])->name('user.store_files');
Route::get('/users/{user}/files', [UserController::class, 'showFiles'])->name('user.files');
