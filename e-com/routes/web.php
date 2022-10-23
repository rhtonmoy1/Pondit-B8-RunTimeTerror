<?php
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::prefix('admin')->name('admin.')->group(function () {

//     Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
//     Route::get('/account', function () { return view('admin.account'); })->name('account');
//     Route::get('/product', function () { return view('admin.product'); })->name('product');
// });



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('dashboard.index');


// Admin Account Section
Route::get('/dashboard/account', [AccountController::class,'index'])->name('account.index');


// Admin Product Section
Route::get('/dashboard/products', [ProductController::class,'index'])->name('products.index');
Route::get('/dashboard/products/create', [ProductController::class,'create'])->name('products.create');
Route::get('/dashboard/products/trash', [ProductController::class,'trash'])->name('products.trash');


// Admin Category Section
Route::get('/dashboard/categories', [CategoryController::class,'index'])->name('categories.index');
Route::get('/dashboard/categories/create', [CategoryController::class,'create'])->name('categories.create');
Route::get('/dashboard/categories/trash', [CategoryController::class,'trash'])->name('categories.trash');

// Admin Color Section
Route::get('/dashboard/colors', [ColorController::class,'index'])->name('colors.index');
Route::get('/dashboard/colors/create', [ColorController::class,'create'])->name('colors.create');
Route::get('/dashboard/colors/trash', [ColorController::class,'trash'])->name('colors.trash');



Route::get('/', function () { return view('frontend.index'); })->name('index');
Route::get('/product', function () { return view('frontend.product'); })->name('product');
Route::get('/testimonial', function () { return view('frontend.testimonial'); })->name('testimonial');
Route::get('/why', function () { return view('frontend.why'); })->name('why');
Route::get('/about', function () { return view('frontend.about'); })->name('about');


