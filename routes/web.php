<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\FaQController;

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
    return redirect('login');
});

Route::get('/generate-barcode', [EntranceController::class, 'index'])->name('generate.barcode');

Auth::routes();

Route::get('/home', [App\Http\Controllers\FaQController::class, 'index'])->name('home');
Route::get('abbenement_types', [App\Http\Controllers\AbbTypeController::class, 'index'])->name('abbenement_types');
