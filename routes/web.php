<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\CommentsController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DetaiPostsController;
use App\Http\Controllers\HomeController;
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

// Route auth
Route::get('/',[HomeController::class,'index'])->name('home');
Route::redirect('home','./');
Route::get('/categories/{slug}',[HomeController::class,'categories'])->name('categories');
Route::get('/tin/{slug}/{slugPost}',[DetaiPostsController::class,'detailPost'])->name('detailPost');
Route::middleware('auth')->post('comment',[DetaiPostsController::class,'processComment'])->name('auth.comment');
Route::post('search/',[HomeController::class,'search'])->name('search');
Route::get('profile/',[HomeController::class,'profile'])->middleware('auth')->name('profile');
// Route form
Route::get('login',[AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('login',[AuthController::class,'processLogin'])->name('auth.login');
Route::post('logout',[AuthController::class,'logout'])->name('auth.logout');
Route::get('register',[AuthController::class,'register'])->middleware('guest')->name('register');
Route::post('register',[AuthController::class,'processRegister'])->name('submit.register');
Route::get('forget',[AuthController::class,'forget'])->middleware('guest')->name('forget');
Route::post('forget',[AuthController::class,'processForget'])->name('submit.forget');
Route::get('reset/{token}/{id}',[AuthController::class,'resetPass'])->name('resetPass');
Route::post('reset',[AuthController::class,'processPass'])->name('processPass');

// Router admin

Route::prefix('admin')->middleware('guestAdmin')->group(function(){
    Route::get('/login',[DashboardController::class,'login'])->name('admin.login');
    Route::post('/login',[DashboardController::class,'processLogin'])->name('admin.login.store');
});
Route::prefix('admin')->middleware(['authAdmin','admin'])->group(function(){
    Route::resource('/category',CategoriesController::class);
    Route::resource('/user',UsersController::class);
    Route::resource('/post',PostsController::class);
    Route::resource('/comment',CommentsController::class);
    Route::get('/',[DashboardController::class,'index'])->name('admin.Dashboard');
    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');
});