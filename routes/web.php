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
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'processRegister'])->name('submit.register');
Route::get('forget',[AuthController::class,'forget'])->name('forget');
Route::post('forget',[AuthController::class,'processForget'])->name('submit.forget');
Route::get('reset/{token}/{id}',[AuthController::class,'resetPass'])->name('resetPass');
Route::post('reset',[AuthController::class,'processPass'])->name('processPass');

// Router admin

Route::prefix('admin')->middleware(['authAdmin','admin'])->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.Dashboard');

    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

    Route::get('/category',[CategoriesController::class,'index'])->name('admin.category');
    Route::get('/category/add',[CategoriesController::class,'create'])->name('admin.category.add');
    Route::post('/category/add',[CategoriesController::class,'store'])->name('admin.category.store');
    Route::delete('/category/destroy/{category}',[CategoriesController::class,'destroy'])->name('admin.category.destroy');
    Route::get('/category/update/{id}',[CategoriesController::class,'edit'])->name('admin.category.update');
    Route::post('/category/update/{id}',[CategoriesController::class,'update'])->name('admin.category.processUpdate');

    Route::get('/post',[PostsController::class,'index'])->name('admin.News');
    Route::get('/post/add',[PostsController::class,'create'])->name('admin.News.Add');
    Route::post('/post/add',[PostsController::class,'store'])->name('admin.new.processAddNew');
    Route::delete('/post/destroy/{id}',[PostsController::class,'destroy'])->name('admin.new.destroy');
    Route::get('/post/update/{id}',[PostsController::class,'edit'])->name('admin.new.update');
    Route::post('/post/update/{id}',[PostsController::class,'update'])->name('admin.new.processUpdate');

    Route::get('/user',[UsersController::class,'index'])->name('admin.Users');
    Route::get('/user/add',[UsersController::class,'create'])->name('admin.Users.Add');
    Route::post('/user/add',[UsersController::class,'store'])->name('admin.Users.store');
    Route::get('/user/update/{id}',[UsersController::class,'edit'])->name('admin.Users.edit');
    Route::post('/user/update/{id}',[UsersController::class,'update'])->name('admin.Users.update');
    Route::delete('/user/destroy/{id}',[UsersController::class,'destroy'])->name('admin.user.destroy');

    Route::get('/comment',[CommentsController::class,'index'])->name('admin.comment');
    Route::delete('/comment/destroy/{id}',[CommentsController::class,'destroy'])->name('admin.comment.destroy');
});
Route::prefix('admin')->middleware('guestAdmin')->group(function(){
    Route::get('/login',[DashboardController::class,'login'])->name('admin.login');
    Route::post('/login',[DashboardController::class,'processLogin'])->name('admin.login.store');
});