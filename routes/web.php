<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;


Route::get('/messages/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/messages', [MessageController::class, 'store'])->name('message.store');


