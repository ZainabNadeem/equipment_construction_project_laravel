<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|s
*/

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::post('/contact', [ContactFormController::class, 'sendEmail'])->name('contact.submit');
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');
