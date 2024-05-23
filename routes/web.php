<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Ofert;
use App\Http\Controllers\Pilates;
use App\Http\Controllers\Studio;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\Schedule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [Welcome::class,'show']);

Route::get('aboutus', [AboutUs::class,'show']);

Route::get('studio', [Studio::class,'show']);

Route::get('pilates', [Pilates::class,'show']);

Route::get('ofert', [Ofert::class,'show']);

Route::get('schedule', [Schedule::class,'show']);

Route::get('contact', [Contact::class,'show']);

Auth::routes();

Route::get('/logowanie', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
