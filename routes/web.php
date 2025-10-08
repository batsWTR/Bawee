<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\FunController;
use \App\Http\Controllers\ContactController;
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

Route::get('/', [IndexController::class,'accueil'])->name('accueil');

Route::get('/mon_cv',[CvController::class, 'index'])->name('cv');
Route::get('/pdf', [CvController::class, 'pdf'])->name('pdf');

Route::get('/fun', [FunController::class, 'index'])->name('fun');

Route::get('/contact',[ContactController::class, 'show'])->name('contact');

