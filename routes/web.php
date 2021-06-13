<?php

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
    return view("pages.index");
});

Route::get('/profile', function () {
    return view('pages.profile');
});

// Route::get('/coffeeshop', function () {
//     return view('pages.coffeeshop');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/editprofile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('editprofile');
Route::get('/coffeeshop/{id}', [App\Http\Controllers\ShopController::class, 'show'])->name('coffeeshop');
Route::post('edit', [App\Http\Controllers\ProfileController::class, 'update'])->name('edit');
