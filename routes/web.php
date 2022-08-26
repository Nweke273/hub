<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetStartedController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get started
Route::get('/get-started', [GetStartedController::class, 'index']);
Route::post('/get-started', [GetStartedController::class, 'send']);

//contact us
Route::get('/contact', [ContactUSController::class, 'index']);
Route::post('/contact', [ContactUSController::class, 'send']);

//Coming Soon
Route::view('/coming-soon', 'coming-soon');