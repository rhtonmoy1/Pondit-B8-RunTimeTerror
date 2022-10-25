<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UserController;
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
Route::get('/',function(){
    return view ('frontend.index');
});
require __DIR__.'/auth.php';
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('/account', function () { return view('admin.account'); })->name('admin.account');
    Route::get('/product', function () { return view('admin.product'); })->name('admin.product');


    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/{user}', [UserController::class, 'show'])->name('show');
    });

    Route::resource('categories', CategoryController::class);

    Route::get('category-trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::patch('category-trash/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('category-trash/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    // Route::get('categories/pdf', [CategoryController::class, 'downloadPdf'])->name('categories.pdf');

    Route::resource('sizes', SizeController::class);
    Route::get('size-trash', [SizeController::class, 'trash'])->name('sizes.trash');
    Route::patch('size-trash/{id}', [SizeController::class, 'restore'])->name('sizes.restore');
    Route::delete('size-trash/{id}', [SizeController::class, 'delete'])->name('sizes.delete');

});

// Category



Route::get('/home ', function () { return view('frontend.index'); })->name('index');
Route::get('/product', function () { return view('frontend.product'); })->name('product');
Route::get('/testimonial', function () { return view('frontend.testimonial'); })->name('testimonial');
Route::get('/why', function () { return view('frontend.why'); })->name('why');
Route::get('/about', function () { return view('frontend.about'); })->name('about');
