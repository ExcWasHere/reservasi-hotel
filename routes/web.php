<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CustomerController;

Route::get('/', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');