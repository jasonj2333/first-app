<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('start');
});

Route::get('strony', [PagesController::class, 'index']);
Route::post('strony', [PagesController::class, 'store']);
Route::get('strony/dodaj', [PagesController::class, 'create']);
Route::get('/strony/{id}', [PagesController::class, 'show'])->where('id', '[0-9]+');
