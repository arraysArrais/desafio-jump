<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceOrderController;
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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

// protected api routes
Route::middleware(['auth:api'])->group(function () {
    Route::get('/service_orders', [ServiceOrderController::class, 'getAll']);
    Route::post('/service_orders', [ServiceOrderController::class, 'create']);
});

Route::get('/unauthorizedResponse', [AuthController::class, 'unauthorized'])->name('login');
