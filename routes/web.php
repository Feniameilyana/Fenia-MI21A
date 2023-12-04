<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
route::get('/',[WelcomeController::class, 'selamatDatang']);
Route::get('/login', [LoginController::class, 'Login']);
Route::post('/private', [LoginController::class, 'private']);