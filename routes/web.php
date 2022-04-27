<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use \App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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

Route::get('/home/index', [HomeController::class, 'index'])->name('index');
Route::get('/home/about', [HomeController::class, 'about'])->name('about');
Route::get('/home/doctors', [HomeController::class, 'doctors'])->name('doctors');
Route::get('/home/blog-details', [HomeController::class, 'blogDeatils'])->name('blogDeatils');
Route::get('/home/home/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/home/blog', [HomeController::class, 'blog'])->name('blog');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//ADMIN PANEL ROUTES//
Route::get('/home/admin', [AdminHomeController::class, 'index'])->name('admin');
//ADMIN CATEGORY CONTROLLERS//
Route::get('/home/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/home/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/home/admin/category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/home/admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/home/admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');
Route::get('/home/admin/category/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin_category_destroy');
Route::get('/home/admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin_category_show');
