<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\homeController;
use App\Http\Controllers\fontend\aboutController;
use App\Http\Controllers\fontend\contactController;
use App\Http\Controllers\fontend\protfolioController;
use App\Http\Controllers\fontend\blogController;

use App\Http\Controllers\backend\adminhomeController;
use App\Http\Controllers\backend\adminblogController;


use App\Http\Controllers\backend\profileController;
use App\Http\Controllers\backend\homesController;
use App\Http\Controllers\backend\contactsController;
use App\Http\Controllers\backend\protfoliosController;
use App\Http\Controllers\backend\categoryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




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


Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/protfolio', [protfolioController::class, 'protfolio'])->name('protfolio');
Route::get('/blog', [blogController::class, 'blog'])->name('blog');
Route::get('/viewpost/{post_slug}', [blogController::class, 'viewpost'])->name('viewpost');


Route::get('/admin', [adminhomeController::class, 'admin'])->middleware(['auth'])->name('admin');


//insert blog post
Route::get('/admin_blog', [adminblogController::class, 'adminblog'])->name('admin_blog');
Route::get('/admin/blog/create', [adminblogController::class, 'blogcreate'])->name('blogcreate');
Route::post('/store', [adminblogController::class, 'store'])->name('blog_store');
Route::get('/edit/{post_slug}', [adminblogController::class, 'edit'])->name('blog_edit');
Route::post('/update/{post_slug}', [adminblogController::class, 'update'])->name('blog_update');
Route::get('/delete/{post_slug}', [adminblogController::class, 'delete'])->name('blog_delete');

// Route::get('/slug', [adminblogController::class, 'slug']);

//profile edit update 
Route::get('admin/profile', [profileController::class, 'adminProfile'])->name('adminProfile');
Route::get('admin/home', [homesController::class, 'adminHome'])->name('adminHome');
Route::get('admin/contact', [contactsController::class, 'adminContact'])->name('adminContact');
Route::get('admin/protfolio', [protfoliosController::class, 'adminProtfolio'])->name('adminProtfolio');

//category 
Route::get('admin/category', [categoryController::class, 'category'])->name('category');
Route::get('admin/category/view', [categoryController::class, 'view'])->name('categoryView');
Route::POST('admin/category/store', [categoryController::class, 'store'])->name('categoryStore');
Route::POST('admin/category/update/{id}', [categoryController::class, 'update'])->name('categoryUpdate');
Route::get('admin/category/updateView/{id}', [categoryController::class, 'updateView'])->name('updateView');
Route::get('admin/category/delete/{id}', [categoryController::class, 'delete'])->name('categoryDelete');
