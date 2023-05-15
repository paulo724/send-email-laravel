<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// rotas para envio de email
Route::get('/contact', [ContactController::class, 'index'])->name(name: 'contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name(name: 'contact.store');
