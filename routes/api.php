<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('editor/{id}', [ArtikelController::class,'index'] );
Route::get('artikel/{id}', [ArtikelController::class,'showDetailArtikel'] );
Route::get('artikel', [ArtikelController::class,'showArtikel'] );