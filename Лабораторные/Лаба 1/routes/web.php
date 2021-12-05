<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get( '/', [ App\Http\Controllers\HomeController::class, 'index' ] )->name( 'home' );
Route::get( '/shop', [ App\Http\Controllers\HomeController::class, 'shop' ] )->name( 'shop' );
Route::get( '/contact', [ App\Http\Controllers\HomeController::class, 'contact' ] )->name( 'contact' );
Route::get( '/product/{id}', [ App\Http\Controllers\HomeController::class, 'product' ] )->name( 'product' );
Route::get( '/checkout', [ App\Http\Controllers\HomeController::class, 'checkout' ] )->name( 'checkout' );
Route::get( '/get_product/{id}', [
    App\Http\Controllers\AdminController::class,
    'get_product'
] )->name( 'get_product' );

Route::group( [ 'prefix' => '/admin', 'middleware' => [ 'admin' ] ], function () {
    Route::get( '/', [ \App\Http\Controllers\AdminController::class, 'index' ] )->name( 'admin-index' );
    Route::get( '/product-edit', [
        \App\Http\Controllers\AdminController::class,
        'product_edit'
    ] )->name( 'product-edit' );
    Route::get( '/delete-product', [
        \App\Http\Controllers\AdminController::class,
        'product_delete'
    ] )->name( 'product-delete' );
    Route::get( '/orders', [
        \App\Http\Controllers\AdminController::class,
        'orders'
    ] )->name( 'orders' );
} );

Route::post( '/product-store', [ \App\Http\Controllers\ProductController::class, 'store' ] )->name( 'product-store' );
Route::post( '/product-update', [
    \App\Http\Controllers\ProductController::class,
    'update'
] )->name( 'product-update' );
Route::post( '/product-delete', [
    \App\Http\Controllers\ProductController::class,
    'destroy'
] )->name( 'product-delete' );
Route::post( '/store-checkout', [
    \App\Http\Controllers\HomeController::class,
    'store_checkout'
] )->name( 'store-checkout' );
