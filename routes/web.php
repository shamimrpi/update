<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\FrontCartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontContactController;
use App\Http\Controllers\AdminProductController;
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

Route::get('/admin/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/backend/loginConfirm',[LoginController::class,'loginConfirm'])->name('admin.login.confirm');
//admin area
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/logout',[LoginController::class,'logout'])->name('admin.logout');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    
    Route::get('/profile',[AdminProfileController::class,'profile'])->name('profile');
    Route::post('/profile/update',[AdminProfileController::class,'profileUpdate'])->name('admin.profile.update');
  
    //Category Controller
    Route::get('/product/category',[ProductCategoryController::class,'index'])->name('product.category');
    Route::get('/product/category/create',[ProductCategoryController::class,'create'])->name('product.category.create');
    Route::post('/product/category/store',[ProductCategoryController::class,'store'])->name('product.store');
    Route::get('/product/category/edit/{id}',[ProductCategoryController::class,'edit'])->name('product.category.edit');
    Route::put('/product/category/update/{id}',[ProductCategoryController::class,'update'])->name('product.category.update');
    Route::get('/product/category/delete/{id}',[ProductCategoryController::class,'destroy'])->name('product.category.delete');

     //Product Controller
    Route::get('product/create',[AdminProductController::class,'create'])->name('product.create');



    
});



Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/cart',[FrontCartController::class,'cartView'])->name('cart');
Route::get('/checkout',[CheckoutController::class,'checkOut'])->name('check.out');
Route::get('/contact',[FrontContactController::class,'contact'])->name('contact');



