<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\homeController;
use App\Http\Controllers\fontend\aboutController;
use App\Http\Controllers\fontend\contactController;
use App\Http\Controllers\fontend\protfolioController;
use App\Http\Controllers\fontend\blogController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/protfolio', [protfolioController::class, 'protfolio'])->name('protfolio');
Route::get('/blog', [blogController::class, 'blog'])->name('blog');
Route::get('/viewpost', [blogController::class, 'viewpost'])->name('viewpost');
