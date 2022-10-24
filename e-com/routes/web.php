<?php

use App\Http\Controllers\CategoryController;
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
    return view ('welcome');
});
require __DIR__.'/auth.php';
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('/account', function () { return view('admin.account'); })->name('admin.account');
    Route::get('/product', function () { return view('admin.product'); })->name('admin.product');

    Route::resource('categories', CategoryController::class);

    Route::get('category-trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::patch('category-trash/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('category-trash/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    // Route::get('categories/pdf', [CategoryController::class, 'downloadPdf'])->name('categories.pdf');
});

// Category



Route::get('/home ', function () { return view('frontend.index'); })->name('index');
Route::get('/product', function () { return view('frontend.product'); })->name('product');
Route::get('/testimonial', function () { return view('frontend.testimonial'); })->name('testimonial');
Route::get('/why', function () { return view('frontend.why'); })->name('why');
Route::get('/about', function () { return view('frontend.about'); })->name('about');
