<?php

use App\Http\Controllers\Api\V1\AuthController as V1AuthController;
use App\Http\Controllers\Api\V1\ManualPaymnetController;
use App\Http\Controllers\Api\V1\PortfolioController;
use App\Http\Controllers\Api\V1\ProposalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'

], function ($router) {
    Route::post('/login', [V1AuthController::class, 'login']);
    Route::post('/register', [V1AuthController::class, 'register']);
    Route::post('/logout', [V1AuthController::class, 'logout']);
    Route::post('/refresh', [V1AuthController::class, 'refresh']);
    Route::get('/user-profile', [V1AuthController::class, 'userProfile']);
    Route::apiResource('portfolios', PortfolioController::class);
    Route::apiResource('proposals', ProposalController::class);
    Route::apiResource('manual', ManualPaymnetController::class);
});