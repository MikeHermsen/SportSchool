<?php

use App\Http\Controllers\CursessenController;
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

Route::get('/entrance/qr_code', [EntranceController::class, 'index'])->name('/entrance/qr_code')->middleware('auth');
Route::get('entrance.gaurd.{token}', [EntranceController::class, 'gaurd'])->name('entrance.gaurd')->middleware('auth');
Route::get('/entrance/scanner', [EntranceController::class, 'scanner'])->name('/entrance/scanner')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\FaQController::class, 'index'])->name('home')->middleware('auth');
Route::get('abbenement_types', [App\Http\Controllers\AbbTypeController::class, 'index'])->name('abbenement_types')->middleware('auth');
Route::get('curssesens_aanvragen', [App\Http\Controllers\CursessenController::class, 'index'])->name('curssesens_aanvragen')->middleware('auth');

Route::get('curses.aanmelden.{id}', [App\Http\Controllers\CursessenController::class, 'aanmelden'])->name('curses.aanmelden')->middleware('auth');
Route::get('mijn_cursussen', [App\Http\Controllers\CursessenController::class, 'mijnCursussen'])->name('mijn_cursussen')->middleware('auth');
Route::get('curses.afmelden.{id}', [App\Http\Controllers\CursessenController::class, 'afmelden'])->name('curses.afmelden')->middleware('auth');

Route::get('abbenement.get.{type}', [App\Http\Controllers\AbbTypeController::class, 'changeAbbo'])->name('abbenement.get')->middleware('auth');
