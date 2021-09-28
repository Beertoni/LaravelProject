<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;



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

Route::namespace('Site')->group(function (){
    Route::get('/',[HomeController::class, 'index'])->name('site.home');

    Route::get('produtos',[CategoryController::class, 'index'])->name('site.products');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('site.products.category');

    Route::get('blog', [BlogController::class, 'index'])->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
    Route::post('contato', [ContactController::class, 'form'])->name('site.contact.form');

});

