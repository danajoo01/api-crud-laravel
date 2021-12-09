<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\GroupController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get_products' , [GroupController::class,'index']);

Route::get('/item' , [ItemController::class,'index']);
Route::post('/item' , [ItemController::class,'create']);
Route::put('/item/{id}' , [ItemController::class,'update']);
Route::delete('/item/{id}' , [ItemController::class,'delete']);

Route::get('/pajak' , [PajakController::class,'index']);
Route::post('/pajak' , [PajakController::class,'create']);
Route::put('/pajak/{id}' , [PajakController::class,'update']);
Route::delete('/pajak/{id}' , [PajakController::class,'delete']);

