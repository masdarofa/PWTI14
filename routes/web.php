<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum-laravel', function () {
return view('praktikum2.index');
});

Route::get('events/{location}/{name}', [App\Http\Controllers\EventsController::class,'show']);

Route::get('events', [App\Http\Controllers\EventsController::class, 'index']);
