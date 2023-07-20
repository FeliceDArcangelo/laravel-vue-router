<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CocktailController;
use App\Models\Cocktail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('cocktails', [CocktailController::class, 'index'])->name('cocktails.index');
Route::get('cocktails/{cocktail}', [CocktailController::class, 'show'])->name('api.cocktails.show');
