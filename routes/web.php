<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactCreateController;
use App\Http\Controllers\ContactEditController;

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');


Route::get('/create', [ContactCreateController::class, 'index'])->name('contacts.create');
Route::post('/create', [ContactCreateController::class, 'store'])->name('contacts.store');

Route::get('/contacts/{id}/edit', [ContactEditController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}/edit', [ContactEditController::class, 'update'])->name('contacts.update');

