<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactCreateController;
use App\Http\Controllers\ContactEditController;
use App\Http\Controllers\ContactDetailController;


Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{contact}', [ContactDetailController::class, 'show'])->name('contacts.show')->middleware('auth');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy')->middleware('auth');;


Route::get('/create', [ContactCreateController::class, 'index'])->name('contacts.create')->middleware('auth');
Route::post('/create', [ContactCreateController::class, 'store'])->name('contacts.store')->middleware('auth');

Route::get('/contacts/{id}/edit', [ContactEditController::class, 'edit'])->name('contacts.edit')->middleware('auth');
Route::put('/contacts/{id}/edit', [ContactEditController::class, 'update'])->name('contacts.update')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
