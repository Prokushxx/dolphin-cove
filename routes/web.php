<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ScheduleController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {
    Route::resource('hotel', HotelController::class);
    Route::resource('program', ProgramController::class);
    Route::resource('reservation', ReservationController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('booking', BookingController::class);
// });



