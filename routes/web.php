<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontendController::class,'index']);
Route::get('/adminpanel',[FrontendController::class,'adminpanel']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class,'index']);
    Route::get('categories',[CategoryController::class,'index']);
    Route::get('add-category',[CategoryController::class,'add']);
    Route::post('insert-category',[CategoryController::class,'insert']);
    Route::get('edit-prod/{id}', [CategoryController::class,'edit']);
    Route::put('update-category/{id}', [CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);

    // products route
    Route::get('products',[ProductController::class,'index']);
    Route::get('add-products',[ProductController::class,'add']);
    Route::post('insert-product',[ProductController::class,'insert']);
    Route::get('edit-product/{id}', [ProductController::class,'edit']);
    Route::put('update-products/{id}', [ProductController::class,'update']);
    Route::get('delete-product/{id}',[ProductController::class,'destroy']);

    //Banner route
    Route::get('banners',[BannerController::class,'index']);
    Route::get('add-banners',[BannerController::class,'add']);
    Route::post('insert-banners',[BannerController::class,'insert']);
    Route::get('edit-banners/{id}', [BannerController::class,'edit']);
    Route::put('update-banners/{id}', [BannerController::class,'update']);
    Route::get('delete-banners/{id}',[BannerController::class,'destroy']);
});
