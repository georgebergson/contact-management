<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactCreateController;

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/create', [ContactCreateController::class, 'index'])->name('contacts.create');
