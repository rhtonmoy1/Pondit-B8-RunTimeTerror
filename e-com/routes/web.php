<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('/account', function () { return view('admin.account'); })->name('account');
    // Route::get('/product', function () { return view('admin.product'); })->name('product');







// Admin Color Sectionn
Route::get('/dashboard/colors', [ColorController::class,'index'])->name('colors.index');
Route::get('/dashboard/colors/create', [ColorController::class,'create'])->name('colors.create');
Route::post('/dashboard/colors/store', [ColorController::class,'store'])->name('colors.store');
Route::get('/colors/edit/{id}', [ColorController::class,'edit'])->name('colors.edit');
Route::patch('/colors/update/{id}', [ColorController::class,'update'])->name('colors.update');
Route::get('/colors/{id}',[ColorController::class,'show'])->name('colors.show');
Route::get('/colors/{id}/delete', [ColorController::class,'delete'])->name('colors.delete');
Route::get('/dashboard/colors/trash', [ColorController::class,'trash'])->name('colors.trash');
Route::patch('colors-trash/{id}', [ColorController::class, 'restore'])->name('colors.restore');
Route::delete('colors-trash/{id}', [ColorController::class, 'tdelete'])->name('colors.tdelete');


//Admin Brand section 
Route::get('/brands/create', [BrandController::class,'create'])->name('brands.create');
Route::post('/brands/store', [BrandController::class,'store'])->name('brands.store');
Route::get('/brands/edit/{id}', [BrandController::class,'edit'])->name('brands.edit');
Route::patch('/brands/update/{id}', [BrandController::class,'update'])->name('brands.update');
Route::get('/brands',[BrandController::class,'index'])->name('brands.index');
Route::get('/brands/{id}',[BrandController::class,'show'])->name('brands.show');
Route::get('/brands/{id}/delete', [BrandController::class,'delete'])->name('brands.delete');




// Admin Product section

Route::get('/dashboard/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/dashboard/products/store', [ProductController::class,'store'])->name('products.store');
Route::get('/dashboard/products/', [ProductController::class,'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class,'Prodectshow'])->name('products.show');
Route::get('/products/{id}/delete', [ProductController::class,'delete'])->name('products.delete');
Route::get('/edit/{id}', [ProductController::class,'edit'])->name('products.edit');
Route::patch('/update/{id}', [ProductController::class,'update'])->name('products.update');
Route::get('/trash', [ProductController::class,'trash'])->name('products.trash');
Route::get('/restore/{id}', [ProductController::class,'restore'])->name('products.restore');
Route::get('/Tdelete/{id}', [ProductController::class,'Tdelete'])->name('products.Tdelete');
 

});



Route::get('/', function () { return view('frontend.index'); })->name('index');
Route::get('/product', function () { return view('frontend.product'); })->name('product');
Route::get('/testimonial', function () { return view('frontend.testimonial'); })->name('testimonial');
Route::get('/why', function () { return view('frontend.why'); })->name('why');
Route::get('/about', function () { return view('frontend.about'); })->name('about');


