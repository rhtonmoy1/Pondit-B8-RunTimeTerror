<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/categories/{category}/product', [WelcomeController::class, 'productList'])->name('frontend.products.index');
Route::get('/products/{product}', [WelcomeController::class, 'productDetails'])->name('frontend.products.show');

require __DIR__ . '/auth.php';


Route::middleware('auth')->prefix('dashboard')->group(function () {

    Route::post('/products/{product}/comments', [CommentController::class, 'store'])->name('products.comments.store');

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('carousels-trash', [CarouselController::class, 'trash'])->name('carousels.trash');
    Route::patch('carousels-trash/{id}', [CarouselController::class, 'restore'])->name('carousels.restore');
    Route::delete('carousels-trash/{id}', [CarouselController::class, 'delete'])->name('carousels.delete');
    Route::resource('carousels', CarouselController::class);
    Route::get('category-trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::patch('category-trash/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('category-trash/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('categories/pdf', [CategoryController::class, 'downloadPdf'])->name('categories.pdf');

    Route::resource('categories', CategoryController::class);

    Route::get('colors-trash', [ColorController::class, 'trash'])->name('colors.trash');
    Route::patch('colors-trash/{id}', [ColorController::class, 'restore'])->name('colors.restore');
    Route::delete('colors-trash/{id}', [ColorController::class, 'delete'])->name('colors.delete');
    Route::get('colors/pdf', [ColorController::class, 'downloadPdf'])->name('colors.pdf');

    Route::resource('colors', ColorController::class);

    Route::get('products-trash', [ProductController::class, 'trash'])->name('products.trash');
    Route::patch('products-trash/{id}', [ProductController::class, 'restore'])->name('products.restore');
    Route::delete('products-trash/{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('products/pdf', [ProductController::class, 'downloadPdf'])->name('products.pdf');
    Route::resource('products', ProductController::class);

    Route::get('/profile', function () {
        return view('users.profile');
    });

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/{user}', [UserController::class, 'show'])->name('show');
        Route::get('/{user}/change-role', [UserController::class, 'changeRole'])->name('change_role');
        Route::patch('/{user}/change-role', [UserController::class, 'updateRole'])->name('update_role');
    });

    Route::post('/products/{product}/cart', [CartController::class, 'store'])->name('products.cart.store');

});



Route::fallback(function () {
    dd('Tomar chaoa puron korte parbona.....');
});
