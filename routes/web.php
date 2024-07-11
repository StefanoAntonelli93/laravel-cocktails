<?php

use App\Http\Controllers\Guest\CocktailsController;
use App\Http\Controllers\Guest\WelcomeController;
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

//rotta per la paggina welcome di home
Route::get('/', [WelcomeController::class, 'index']);
//rotta per la paggina dei cocktails
Route::get('/cocktails', [CocktailsController::class, 'index']);
