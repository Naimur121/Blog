<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/brand-shop/{name}','shop')->name('brand.shop');
    Route::get('/details/{slug}','details')->name('details');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::controller(AdminController::class)->group( function () {
        Route::get('/dashboard','index')->name('dashboard');
    });
    Route::controller(BrandController::class)->group(function(){
        Route::get('/brand/add','index')->name('brand.add');
        Route::post('/brand/add/final','addBrand')->name('brand.add.final');
        Route::get('/brand/manage','manage')->name('brand.manage');
        Route::post('/brand/edit','edit')->name('brand.edit');
        Route::post('/brand/detele','delete')->name('brand.delete');
        Route::get('/brand/status/{id}','status')->name('status');
    });
    Route::controller(ProductController::class)->group(function(){
        Route::get('/product','index')->name('product');
        Route::post('/product/add','addProduct')->name('product.add');
        Route::get('/product/manage','manage')->name('product.manage');
        Route::post('/product/Edit','edit')->name('product.edit');
        Route::post('/product/details','details')->name('product.details');
        Route::post('/product/delete','details_item')->name('product.delete');
    });
});
