<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// personal-site.com => welcome
// personal-site.com/contacto => contacto
// personal-site.com/avbout => about


Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');
Route::view('/blog','blog')->name('blog');
Route::view('/about','about')->name('about');