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



// Halaman Home
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);

// Halaman Products
Route::prefix('category') -> group(function() {
    Route::get('/marbel-edu-games',[App\Http\Controllers\ProductController::class,'marbeledugames']);
    Route::get('/marbel-and-friends-kids-gammes',[App\Http\Controllers\ProductController::class,'marbelandfriendskidsgame']);
    Route::get('/riri-story-books',[App\Http\Controllers\ProductController::class,'riristorybook']);
    Route::get('/kolak-kids-songs',[App\Http\Controllers\ProductController::class,'kolakkidssongs']);
});

// Halaman Berita
Route::get('/berita',[App\Http\Controllers\Berita::class, 'Berita']);

// Halaman Program
Route::prefix('category') -> group(function() {
    Route::get('/karir',[App\Http\Controllers\ProgramController::class,'karir']);
    Route::get('/magang',[App\Http\Controllers\ProgramController::class,'magang']);
    Route::get('/kunjungan-industri',[App\Http\Controllers\ProgramController::class,'kunjunganindustri']);
});

//Halaman About Us
Route::get('/about-us',[App\Http\Controllers\PageController::class,'aboutus']);

// Halaman Contact Us
Route::get('/contact-us',[App\Http\Controllers\ContactUsController::class,'contactus']);