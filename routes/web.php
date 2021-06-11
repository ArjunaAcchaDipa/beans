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

// Route::get('/editprofile', function () {
//     return view('pages.editprofile');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editprofile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('editprofile');
Route::post('edit', [App\Http\Controllers\ProfileController::class, 'update'])->name('edit');