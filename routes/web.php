<?php

use App\Http\Controllers\AttendanceController;
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

Route::get('/', [AttendanceController::class, 'index'])->name('attendance.index');

Route::get('/create', [AttendanceController::class, 'create'])->name('attendance.create');

Route::post('/', [AttendanceController::class, 'store'])->name('attendance.store');

Route::get('/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');

Route::put('/{attendance}/update', [AttendanceController::class, 'update'])->name('attendance.update');

Route::delete('/{attendance}/destroy', [AttendanceController::class, 'destroy'])->name('attendance.destroy');
