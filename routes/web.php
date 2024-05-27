<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Ofert;
use App\Http\Controllers\Pilates;
use App\Http\Controllers\Privacy;
use App\Http\Controllers\Rules;
use App\Http\Controllers\Studio;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\Schedule;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [Welcome::class,'show'])->name('/');

Route::get('aboutus', [AboutUs::class,'show'])->name('aboutus');

Route::get('studio', [Studio::class,'show'])->name('studio');

Route::get('pilates', [Pilates::class,'show'])->name('pilates');

Route::get('ofert', [Ofert::class,'show'])->name('ofert');

Route::get('schedule', [Schedule::class,'show'])->name('schedule');

Route::get('contact', [Contact::class,'show'])->name('contact');

Route::get('privacy', [Privacy::class,'show'])->name('privacy');

Route::get('rules', [Rules::class,'show'])->name('rules');

Route::get('admin/users', [AdminController::class,'index'])->name('admin.users');

Auth::routes();

Route::get('/logowanie', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
