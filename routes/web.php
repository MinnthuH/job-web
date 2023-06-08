<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(CategoryController::class)->group(function(){
    Route::get('all/category', 'allCategory')->name('all.category'); // all category
    Route::get('create/category', 'createCategory')->name('create.category'); // create category
    Route::post('store/category', 'storeCategory')->name('store.category'); // create category
    Route::get('edit/category/{id}', 'editCategory')->name('edit.category'); // edit category
    Route::post('update/category/{id}', 'updateCategory')->name('update.category'); // update category
    Route::get('delete/category/{id}', 'deleteCategory')->name('delete.category'); // edit category

});
