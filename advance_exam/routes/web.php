<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])
    ->name('contacts.index');


Route::get('/confirm', [ContactController::class, 'confirm'])
    ->name('contacts.confirm');

Route::post('/send', [ContactController::class, 'send'])
    ->name('contacts.send');

Route::get('/thanks', [ContactsController::class, 'thanks'])
    ->name('contacts.thanks');