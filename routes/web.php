<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(IndexController::class)->group(function () {
    Route::get('/home', 'index');
    Route::get('/create', 'viewCreatePage')->name('create');
    Route::post('/save', 'SaveAttendance')->name('save');
    Route::get('/delete', 'delete')->name('delete');
});

// Route::get('/', [AttendanceController::class, 'index'])->name('attendance.index');

// Route::get('/create', [AttendanceController::class, 'create'])->name('attendance.create');

// Route::post('/', [AttendanceController::class, 'store'])->name('attendance.store');

// Route::get('/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');

// Route::put('/{attendance}/update', [AttendanceController::class, 'update'])->name('attendance.update');

// Route::delete('/{attendance}/destroy', [AttendanceController::class, 'destroy'])->name('attendance.destroy');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
