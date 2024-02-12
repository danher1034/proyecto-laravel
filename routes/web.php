<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
})->name('index');;

Route::get('signupForm', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('loginForm', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('events', [EventController::class, 'index'])->name('events');
Route::get('events/create', [EventController::class, 'create'])->name('events/create');
Route::post('events/store', [EventController::class, 'store'])->name('events/store');
Route::get('events/show/{event}', [EventController::class, 'show'])->name('events/show');
Route::get('events/edit/{event}', [EventController::class, 'edit'])->name('events/edit');
Route::put('events/update/{event}', [EventController::class, 'update'])->name('events/update');
Route::get('events/destroy/{event}', [EventController::class, 'destroy'])->name('events/destroy');

Route::get('players', [PlayerController::class, 'index'])->name('players');
Route::get('players/create', [PlayerController::class, 'create'])->name('players/create');
Route::post('players/store', [PlayerController::class, 'store'])->name('players/store');
Route::get('players/show/{player}', [PlayerController::class, 'show'])->name('players/show');
Route::get('players/edit/{player}', [PlayerController::class, 'edit'])->name('players/edit');
Route::put('players/update/{player}', [PlayerController::class, 'update'])->name('players/update');
Route::get('players/destroy/{player}', [PlayerController::class, 'destroy'])->name('players/destroy');
Route::get('players/visibility/{player}', [PlayerController::class, 'visibility'])->name('players/visibility');

Route::get('account', function() { return view('users.account'); })->name('account')->middleware('auth');

Route::get('maps', function() { return view('maps.index'); })->name('maps');
