<?php

use App\Http\Controllers\WikiprofeController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

Route::get('/landing', function () {
    return view('profesores.landing');
});

Route::get('/contact', function () {
    return view('components.contact');
})->name('contact');

Route::get('/contact', function () {
    return view('components.contact');
})->name('contact.page');

Route::get('/contact/show', [ContactController::class, 'show'] )->name('contact.show');
Route::post('/contact/submit', [ContactController::class, 'submit'] )->name('contact.submit');

Route::resource('wikiprofes',WikiprofeController::class);

Route::resource('profesores',ProfesorController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/login', [AuthController::class, 'login']);
