<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ConditionController;
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
// Ruta para el index
Route::get('/', function () {return view('index');})->name('index'); 
// Rutas para el login y el singup
Route::get('signupForm', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('loginForm', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Ruta para la cuenta del usuario y solo podrán entrar si estan logueados
Route::get('account', function() { return view('users.account'); })->name('account')->middleware('auth');
// Rutas para el apartado de usuario
Route::get('users/edit/{user}', [LoginController::class, 'edit'])->name('users/edit');
Route::put('users/update/{user}', [LoginController::class, 'update'])->name('users/update');
// Rutas para el apartado de eventos
Route::get('events', [EventController::class, 'index'])->name('events');
Route::get('events/show/{event}', [EventController::class, 'show'])->name('events/show');
Route::get('events/like/{event}', [EventController::class, 'like'])->name('events/like');
// Rutas para el apartado de jugadores
Route::get('players', [PlayerController::class, 'index'])->name('players');
Route::get('players/show/{player}', [PlayerController::class, 'show'])->name('players/show');
// Rutas para el apartado de mapa
Route::get('maps', function() { return view('maps.index'); })->name('maps');
// Rutas para el apartado de productos
Route::get('products', [ProductController::class, 'index'])->name('products');
// Rutas para el footer
Route::get('config', [ConditionController::class, 'ConfigCookie'])->name('config');
Route::get('cookiepolicity', [ConditionController::class, 'CookiePolicity'])->name('cookiepolicity');
Route::get('privacitypolicity', [ConditionController::class, 'PrivacityPolicity'])->name('privacitypolicity');
Route::get('terms', [ConditionController::class, 'Terms'])->name('terms');
// Middleware para controlar que solo pueda acceder administradores
Route::middleware(['admin'])->group(function () {  
    // Rutas para el apartado de eventos que solo podrán entrar administradores
    Route::get('events/create', [EventController::class, 'create'])->name('events/create');
    Route::post('events/store', [EventController::class, 'store'])->name('events/store');
    Route::get('events/edit/{event}', [EventController::class, 'edit'])->name('events/edit');
    Route::put('events/update/{event}', [EventController::class, 'update'])->name('events/update');
    Route::get('events/destroy/{event}', [EventController::class, 'destroy'])->name('events/destroy');  
    // Rutas para el apartado de jugadores que solo podrán entrar administradores
    Route::get('players/create', [PlayerController::class, 'create'])->name('players/create');
    Route::post('players/store', [PlayerController::class, 'store'])->name('players/store');
    Route::get('players/edit/{player}', [PlayerController::class, 'edit'])->name('players/edit');
    Route::put('players/update/{player}', [PlayerController::class, 'update'])->name('players/update');
    Route::get('players/destroy/{player}', [PlayerController::class, 'destroy'])->name('players/destroy');
    Route::get('players/visibility/{player}', [PlayerController::class, 'visibility'])->name('players/visibility');
    // Rutas para el apartado de mensajes que solo podrán entrar administradores
    Route::get('messages', [MessageController::class, 'index'])->name('messages');
    Route::get('messages/show/{message}', [MessageController::class, 'show'])->name('messages/show');
    Route::get('messages/destroy/{message}', [MessageController::class, 'destroy'])->name('messages/destroy');
});
// Middleware para controlar que solo pueda acceder miembros
Route::middleware(['member'])->group(function () { 
    // Rutas para el apartado de mensajes que solo podrán entrar miembros
    Route::get('messages/create', [MessageController::class, 'create'])->name('messages/create')->middleware('member');
    Route::post('messages/store', [MessageController::class, 'store'])->name('messages/store')->middleware('member');
});
