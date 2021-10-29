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
    return view('welcome');
});
Route::get('/faqs', [App\Http\Controllers\FaqController::class, 'index'])->name('faqs');
Route::get('/contactus', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('about-us');
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
