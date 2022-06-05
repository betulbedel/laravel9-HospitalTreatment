<?php

use App\Http\Controllers\AdminPanel\AdminPoliclinicController;
use App\Http\Controllers\AdminPanel\CommentController ;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use \App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use \App\Http\Controllers\AdminPanel\MessageController as MessageController;

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
//HOME ROUTES//

Route::get('/home/index', [HomeController::class, 'index'])->name('index');
Route::get('/home/about', [HomeController::class, 'about'])->name('about');
Route::get('/home/references', [HomeController::class, 'references'])->name('references');
Route::get('/home/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/home/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/home/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/home/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');

Route::get('/home/doctors', [HomeController::class, 'doctors'])->name('doctors');
Route::get('/home/blog-details', [HomeController::class, 'blogDeatils'])->name('blogDeatils');


Route::get('/home/policlinic/{id}/', [HomeController::class, 'policlinic'])->name('policlinic');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//ADMIN PANEL ROUTES//
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    //GENERAL ROUTES//
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
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
//ADMIN POLICLINIC ROUTES//
    Route::prefix('/policlinic')->name('policlinic.')->controller(AdminPoliclinicController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });
    //ADMIN IMAGE GALLERY ROUTES//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/destroy/{pid}/{id}',  'destroy')->name('destroy');
    });

    //ADMIN Message ROUTES//
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });



    //ADMIN Faq ROUTES//
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });
    //ADMIN COMMENT ROUTES//
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}',  'update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });


});
