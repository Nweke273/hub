<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BootcampRegController;
use App\Http\Controllers\GeneralScreeningController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
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
    return view('admin.admin_index');
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

//BootCamp All route
Route::controller('BootcampRegController')->group(function () {
    Route::get('/bootcamp/reg', [BootcampRegController::class, 'BootcampReg'])->name('bootcamp.reg');
    Route::post('/store/bootcamp', [BootcampRegController::class, 'StoreBootcamp'])->name('store.bootcamp');
    Route::get('/user/logout', [BootcampRegController::class, 'Logout'])->name('user.logout');
    Route::get('/reg/applicants', [BootcampRegController::class, 'Applicants'])->name('reg.applicants')->middleware('auth');
    // Route::get('/trashList', [BootcampRegController::class, 'TrashList'])->name('trashList');
    Route::get('/delete/applicant/{id}', [BootcampRegController::class, 'DeleteApplicant'])->name('delete.applicant')->middleware('auth');
    Route::get('/screen/applicant/{id}', [BootcampRegController::class, 'ScreenApplicant'])->name('screen.applicant')->middleware('auth');

    
});

Route::controller('GeneralScreeningController')->group(function () {
    Route::post('/store/result', [GeneralScreeningController::class, 'StoreResult'])->name('store.result');
    Route::get('/general/result', [GeneralScreeningController::class, 'GeneralResult'])->name('general.result');
    Route::get('/view/result/{id}', [GeneralScreeningController::class, 'ViewResult'])->name('view.result');
    
});

Route::controller('AdminController')->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    
    
});

require __DIR__.'/auth.php';
