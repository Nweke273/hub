<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use App\Models\Training;
use App\Models\Training as ModelsTraining;
use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//get started
Route::get('/get-started', [SiteController::class, 'index']);
Route::post('/get-started', [SiteController::class, 'send']);

//Coming Soon
Route::view('/coming-soon', 'coming-soon');

// Notify
Route::post('/notify', [SiteController::class, 'notify']);


//Login
Route::view('/login', 'login');

//News Letter
Route::post('/news-letter', [SiteController::class, 'subscribe']);

//Contact Us
Route::post('/contact', [SiteController::class, 'contact']);

//Event registration
Route::get('/event/register',[ParticipantController::class, 'register']);

//Bootcamp
Route::get('/bootcamp/register', [BootcampController::class, 'index']);
Route::post('/apply', [BootcampController::class, 'apply']);

//Schedule bootcamp interview for students
// Route::get('/bootcampInterviewMail', function () {return view('bootcampInterviewMail');})->name('home');
// Route::post('/send-mail', 'YourControllerName@bootcampInterviewMail')->name('sendMail');

Route::get('/bootcampInterviewSendMail', [BootcampController::class, 'bootcampInterviewMailHome']);




Route::post('/send-mail', [BootcampController::class, 'bootcampInterviewMail'])->name('sendMail');








require __DIR__.'/auth.php';

