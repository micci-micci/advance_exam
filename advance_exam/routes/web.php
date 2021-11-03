<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])
    ->name('contacts.index');


Route::get('/confirm', [ContactController::class, 'confirm'])
    ->name('contacts.confirm');