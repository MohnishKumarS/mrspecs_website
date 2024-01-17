<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\admin\BrandsController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;

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


Route::get('/clear', function() {
   
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
 
 });
Auth::routes();

// ================= HOME =======================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/next', [HomeController::class, 'next']);
Route::get('/collection/{category_slug}', [HomeController::class, 'productViewAll']);
Route::get('/collection/{category_slug}/{product_slug}', [HomeController::class, 'singleProductView']);
// =================== USER ====================

Route::post('contact-submit',[MailController::class,'contact_mail']);

// ==================== ADMIN ==================

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard',[DashboardController::class,'index']);

    // -------- CATEGORY ---------------

    Route::controller(CategoryController::class)->group(function(){

        Route::get('category','index');
        Route::get('add-category','add_category');
        Route::post('store-category','store_category');
        Route::get('category/{category}/edit','edit');
        Route::put('category/{id}','update');
    });

     // -------- PRODUCT ---------------

     Route::controller(ProductController::class)->group(function(){

        Route::get('product','index');
        Route::get('product/create','create');
        Route::post('product','store');
        Route::get('product/{id}/edit','edit');
        Route::put('product/{id}','update');
        Route::get('product/{id}/delete','delete');
     });

    //  ---------- BRANDS -----------------

    // -------- livewire ---
    Route::get('brands',App\Livewire\Admin\Brand\Index::class);

    Route::controller(BrandsController::class)->group(function(){

        // Route::get('brands','index');
        Route::get('brands/create','create');
        Route::post('brands/store','store');
        Route::get('brand/delete/{id}','delete');
    });

});
