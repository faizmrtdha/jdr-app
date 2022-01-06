<?php

use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// backend
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UploadImgController;
use App\Http\Controllers\Backend\UserManagementController;
use App\Http\Controllers\Backend\RoleManagementController;
use App\Http\Controllers\Backend\SlideshowController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\QuotesController;

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

// Backend
Route::post('/uploadImg', [UploadImgController::class, 'store']);
Route::delete('/uploadImg', [UploadImgController::class, 'destroy']);

Route::redirect('/login', '/admin');
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/admin', 'LoginController@index');

// Rsoute::group()
Route::middleware(['auth'])->group(function () {
  Route::resource('/dashboard/profile', ProfileController::class);
  Route::resource('/dashboard/home/slideshow', SlideshowController::class);
  Route::resource('/dashboard/home/quote', QuotesController::class);
  Route::put('/dashboard/home/quote/{quote}', [QuotesController::class, 'update']);
  Route::resource('/dashboard/home/client', ClientController::class);
  Route::resource('/dashboard/home/partner', PartnerController::class);
  Route::resource('/dashboard/user-management', UserManagementController::class);
  Route::resource('/dashboard/role', RoleManagementController::class);
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/dashboard/home', [DashboardController::class, 'home']);
  // Route::get('/dashboard/role', [DashboardController::class,'role']);
});



// frontend
Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('lang/{language}', [LocalizationController::class, "switch"])->name('localization.switch');
Route::group(['prefix' => 'page', 'as' => 'page.'], function () {
  Route::get('/{slug}', [HomeController::class, "page"]);
});
// Route::get('/page/{slug}', [HomeController::class, "page"]);
