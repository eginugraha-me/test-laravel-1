<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\InvoiceController;
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

// auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/', [DomainController::class, 'checkDomain'])->name('home');
Route::get('/', [DomainController::class, 'index'])->name('home');


Route::get('/configuration/{domain}', [ConfigController::class, 'show'])->name('configuration');

Route::post('invoice', [InvoiceController::class, 'index'])->name('checkout');

