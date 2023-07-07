<?php

use App\Http\Controllers\ApiCrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::namespace('api')->group(function () {
    Route::prefix('crud')->group(function () {
        Route::post('', [ApiCrudController::class, 'store']);
        Route::get('', [ApiCrudController::class, 'index']);
        Route::get('{id}', [ApiCrudController::class, 'show']);
        Route::put('{id}', [ApiCrudController::class, 'update']);
        Route::delete('{id}', [ApiCrudController::class, 'destroy']);
    });
});
