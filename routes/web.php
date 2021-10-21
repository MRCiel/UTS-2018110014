<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

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

Route::get('/', [PokemonController::class, 'select']);
Route::get('/home', [PokemonController::class, 'select']);
Route::get('/orderbyAZ', [PokemonController::class, 'orderbyAZ']);
Route::get('/orderbyZA', [PokemonController::class, 'orderbyZA']);
Route::get('/orderbyLowest', [PokemonController::class, 'orderbyASC']);
Route::get('/orderbyHighest', [PokemonController::class, 'orderbyDESC']);
Route::get('/orderbyRAND', [PokemonController::class, 'orderbyRAND']);
Route::get('/detail{id?}', [PokemonController::class, 'detail']);
