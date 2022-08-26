<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
Route::get('/get-started', [SiteController::class, 'index']);
Route::post('/get-started', [SiteController::class, 'send']);

//Coming Soon
Route::view('/coming-soon', 'coming-soon');

//Login
Route::view('/login', 'login');

//News Letter
Route::post('/news-letter', [SiteController::class, 'subscribe']);

//Contact Us
Route::post('/contact', [SiteController::class, 'contact']);