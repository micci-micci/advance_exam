<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

// Contact page
Route::get('/', [ContactController::class, 'index'])
    ->name('contacts.index');

Route::get('/confirm', [ContactController::class, 'confirm'])
    ->name('contacts.confirm');

Route::post('/send', [ContactController::class, 'send'])
    ->name('contacts.send');

Route::get('/thanks', [ContactsController::class, 'thanks'])
    ->name('contacts.thanks');

// Admin page
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admins.index');

Route::get('/search', [AdminController::class, 'search'])
    ->name('admins.search');

Route::delete('/destroy', [AdminController::class, 'destroy'])
    ->name('admins.destroy');