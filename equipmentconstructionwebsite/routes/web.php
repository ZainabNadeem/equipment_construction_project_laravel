<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BrandsController;
use App\Http\controllers\CareerController;
use App\Http\Controllers\DevelonController;
use App\Http\Controllers\BobcatController;
use App\Http\Controllers\BomagController;
use App\Http\COntrollers\KCPController;
use App\Http\Controllers\KubotaController;
use App\http\controllers\CopazController;
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


Route::post('/career/submit', [CareerController::class, 'submit'])->name('career.submit');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/Career',[CareerController::class,'index'])->name('Career');
Route::get('/Brands',[BrandsController::class, 'index'])->name('Brands');
Route::get('/Brands/Bobcat',[BobcatController::class, 'index'])->name('Bobcat');
Route::get('/Brands/Develon',[DevelonController::class, 'index'])->name('Develon');
Route::get('/Brands/Bomag',[BomagController::class, 'index'])->name('Bomag');
Route::get('/Brands/KCP',[KCPController::class, 'index'])->name('KCP');
Route::get('/Brands/Kubota',[KubotaController::class, 'index'])->name('Kubota');
Route::get('/Brands/Copaz',[CopazController::class, 'index'])->name('Copaz');
Route::post('/contact', [ContactFormController::class, 'sendEmail'])->name('contact.submit');
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');
