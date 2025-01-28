<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contact');
Route::get('/tuning', [PageController::class, 'tuning'])->name('tuning');


Route::get('/client', [ClientController::class,'home'])->name('client.home')
->middleware('client.auth');

Route::get('/client/auth', [ClientController::class, 'auth_h'])->name('client.auth');
Route::post('/client/auth', [ClientController::class, 'auth'])->name('client.auth');
Route::get('/client/register', [ClientController::class, 'register'])->name('client.register');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');

Route::get('/client', [ClientController::class, 'home'])
    ->middleware('client.auth')
    ->name('client.home');
Route::get('/client/logout', [ClientController::class, 'logout'])->name('client.logout');

