<?php

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

Route::middleware('json.response')->prefix('v1')->group(function() {
    Route::get('log', function() {
        return 'Unauthorized';
    })->name('login');
   Route::post('login', [\App\Http\Controllers\auth\LoginController::class, 'login']);
   Route::middleware(['auth:sanctum'])->group(function() {
       Route::post('logout', [\App\Http\Controllers\auth\LoginController::class, 'logout']);
   });
   Route::middleware('auth:sanctum')->post('broadcasting/auth', function() {
      return auth('sanctum')->user();
   });
   Route::apiResource('user', \App\Http\Controllers\user\UserController::class);
   Route::middleware(['auth:sanctum',])->get('/chat/rooms', [\App\Http\Controllers\ChatController::class, 'rooms']);
    Route::middleware(['auth:sanctum',])->get('/chat/room/{roomId}/messages', [\App\Http\Controllers\ChatController::class, 'messages']);
    Route::middleware(['auth:sanctum',])->post('/chat/room/{roomId}/message', [\App\Http\Controllers\ChatController::class, 'newMessage']);
    Route::get('/column', [\App\Http\Controllers\ColumnController::class, 'getAllColumns']);
});
