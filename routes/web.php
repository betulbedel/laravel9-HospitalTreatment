<?php

use App\Http\Controllers\AdminPanel\AdminPoliclinicController;
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
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminHomeController::class, 'index'])->name('index');
//ADMIN CATEGORY CONTROLLERS//
Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
Route::get('/', 'index')->name('index');
Route::get('/create',  'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}',  'edit')->name('edit');
Route::post('/update/{id}',  'update')->name('update');
Route::get('/destroy/{id}',  'destroy')->name('destroy');
Route::get('/show/{id}',  'show')->name('show');
});
//ADMIN POLICLINIC CONTROLLERS//
    Route::prefix('/policlinic')->name('policlinic.')->controller(AdminPoliclinicController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });
});
