<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;

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

Route::get('/package', [TransactionController::class, 'index']);
Route::get('/package/{id}', [TransactionController::class, 'show']);
Route::post('/package', [TransactionController::class, 'store']);
Route::put('/package/{id}', [TransactionController::class, 'update']);
Route::patch('/package/{id}', [TransactionController::class, 'update']);
Route::delete('/package/{id}', [TransactionController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
