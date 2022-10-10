<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


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

Route::post('/get-started', [SiteController::class, 'send']);
Route::get('/get-started2', [SiteController::class, 'recieve']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
