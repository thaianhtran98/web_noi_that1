<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store'])->name('login_store');
Route::get('admin/users/logout',[LoginController::class,'logout']);


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create'])->name('add_danhmuc');
            Route::post('add', [MenuController::class, 'store'])->name('store_danhmuc');
            Route::get('list', [MenuController::class, 'index'])->name('list_danhmuc');
            Route::get('edit/{menu}', [MenuController::class, 'show'])->name('edit_danhmuc');
            Route::post('edit/{menu}', [MenuController::class, 'update'])->name('update_danhmuc');
            Route::DELETE('destroy', [MenuController::class, 'destroy'])->name('delete_danhmuc');
        });

        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create'])->name('add_sp');
            Route::post('add', [ProductController::class, 'store'])->name('store_sp');
            Route::get('list', [ProductController::class, 'index'])->name('list_sp');
            Route::get('edit/{product}', [ProductController::class, 'show'])->name('edit_sp');
            Route::post('edit/{product}', [ProductController::class, 'update'])->name('update_sp');
            Route::DELETE('destroy', [ProductController::class, 'destroy'])->name('delete_sp');
        });

        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create'])->name('add_slide');
            Route::post('add', [SliderController::class, 'store'])->name('store_slide');
            Route::get('list', [SliderController::class, 'index'])->name('list_slide');
            Route::get('edit/{slider}', [SliderController::class, 'show'])->name('edit_slide');
            Route::post('edit/{slider}', [SliderController::class, 'update'])->name('update_slide');
            Route::DELETE('destroy', [SliderController::class, 'destroy'])->name('delete_slide');
        });

        #Upload
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store'])->name('upload');
        Route::post('upload_detail/services', [\App\Http\Controllers\Admin\UploadController::class, 'store_img_detail'])->name('upload_detail');
        Route::post('upload_slider/services', [\App\Http\Controllers\Admin\UploadController::class, 'store_slider'])->name('upload_slider');
        Route::post('upload/services/delete', [\App\Http\Controllers\Admin\UploadController::class, 'delete'])->name('upload_delete');

        #Cart
        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index']);
        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
    });
});

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::post('/services/load-product', [App\Http\Controllers\MainController::class, 'loadProduct'])->name('loadProduct');

Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index'])->name('index_danhmuc');
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index'])->name('index_sanpam');

Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index'])->name('add_cart');
Route::get('carts', [App\Http\Controllers\CartController::class, 'show'])->name('show_cart');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update'])->name('update_cart');
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove'])->name('remove_cart');
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart'])->name('add_sp_cart');
//Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);
