<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[homeController::class,'homepage']);

Route::get('/home',[homeController::class,'index'])->middleware('auth')->name('home');

Route::get('post',[homeController::class,'post'])->middleware(['auth','admin']);

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

require __DIR__.'/auth.php';

Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhome');
Route::get('/post_page',[AdminController::class,'post_page']);

Route::post('/add_categories',[AdminController::class,'add_categories']);
Route::post('/add_post',[AdminController::class,'add_post']);
Route::get('/show_post',[AdminController::class,'show_post']);

Route::get('/post_details/{id}',[homeController::class,'post_details']);

Route::get('/create_post',[homeController::class,'create_post']);
Route::post('/user_post',[homeController::class,'user_post']);

