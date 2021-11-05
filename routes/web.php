<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'checkAdminLogin'],function (){

    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'dashboard']);

    Route::get('/category',[App\Http\Controllers\CategoryController::class,'category']);
    Route::get('/category-create',[App\Http\Controllers\CategoryController::class,'categoryCreate']);
    Route::post('/category-add',[App\Http\Controllers\CategoryController::class,'categoryAdd']);
    Route::get('/category-edit/{id}',[App\Http\Controllers\CategoryController::class,'categoryEdit']);
    Route::post('/category-update',[App\Http\Controllers\CategoryController::class,'categoryUpdate']);
    Route::get('/category-delete/{id}',[App\Http\Controllers\CategoryController::class,'categoryDelete']);

    Route::get('/product',[App\Http\Controllers\ProductController::class,'product']);
    Route::get('/product-create',[App\Http\Controllers\ProductController::class,'productCreate']);
    Route::post('/product-add',[App\Http\Controllers\ProductController::class,'productAdd']);
    Route::get('/product-edit/{id}',[App\Http\Controllers\ProductController::class,'productEdit']);
    Route::post('/product-update',[App\Http\Controllers\ProductController::class,'productUpdate']);
    Route::get('/product-delete/{id}',[App\Http\Controllers\ProductController::class,'productDelete']);

    
    Route::get('/order',[App\Http\Controllers\OrderController::class,'order']);
    Route::get('/order-status/{id}',[App\Http\Controllers\OrderController::class,'orderStatus']);
    Route::get('/order-delete/{id}',[App\Http\Controllers\OrderController::class,'orderDelete']);

    Route::get('/setting',[App\Http\Controllers\SettingController::class,'setting']);
    Route::post('/setting-admin-update',[App\Http\Controllers\SettingController::class,'settingAdminUpdate']);
    Route::post('/setting-home-update',[App\Http\Controllers\SettingController::class,'settingHomeUpdate']);
    Route::get('/slider',[App\Http\Controllers\SettingController::class,'slider']);
    Route::post('/slider-add',[App\Http\Controllers\SettingController::class,'sliderAdd']);
    Route::get('/slider-delete/{id}',[App\Http\Controllers\SettingController::class,'sliderDelete']);

    
    Route::get('/admin-logout',[App\Http\Controllers\AdminController::class,'adminLogout']);
    Route::get('/my-admin',[App\Http\Controllers\AdminController::class,'myAdmin']);
    Route::post('/change-avatar-admin',[App\Http\Controllers\AdminController::class,'changeAvatarAdmin']);
    Route::post('/change-name-admin',[App\Http\Controllers\AdminController::class,'changeNameAdmin']);
    

});

Route::get('/admin-login',[App\Http\Controllers\AdminController::class,'adminLogin'])->middleware('checkLogin');
Route::post('/admin-login',[App\Http\Controllers\AdminController::class,'adminLoginX']);

Route::get('/',[App\Http\Controllers\HomeController::class,'home']);
Route::get('/product-detail/{id}',[App\Http\Controllers\HomeController::class,'productDetail']);

Route::get('/cart',[App\Http\Controllers\CartController::class,'cart']);
Route::get('/add-to-cart/{id}',[App\Http\Controllers\CartController::class,'addToCart']);
Route::get('/cart-remove/{id}',[App\Http\Controllers\CartController::class,'cartRemove']);
Route::get('/tangsoluong/{rowid}',[App\Http\Controllers\CartController::class,'tangsoluong']);
Route::get('/giamsoluong/{rowid}',[App\Http\Controllers\CartController::class,'giamsoluong']);
Route::post('/order-add',[App\Http\Controllers\CartController::class,'orderAdd']);

Route::post('/search-product',[App\Http\Controllers\HomeController::class,'searchProduct']);
Route::post('/selective-product',[App\Http\Controllers\HomeController::class,'selectiveProduct']);



Route::get('/order-add',[App\Http\Controllers\HomeController::class,'orderSuccess']);
//=============================================================================================================
