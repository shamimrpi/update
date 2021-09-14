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

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login/confirm',[LoginController::class,'loginConfirm'])->name('login.confirm');

//admin area
Route::middleware(['auth'])->group(function () {
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
  Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
     

});


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/cart',[FrontCartController::class,'cartView'])->name('cart');
Route::get('/checkout',[CheckoutController::class,'checkOut'])->name('check.out');
Route::get('/contact',[FrontContactController::class,'contact'])->name('contact');



