<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Ofert;
use App\Http\Controllers\PassesController;
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

Route::get('passes', [PassesController::class,'index'])->name('passes.index')->middleware('auth');
Route::get('passes/create', [PassesController::class,'create'])->name('passes.create')->middleware('auth');
Route::get('passes/{passes}', [PassesController::class,'show'])->name('passes.show')->middleware('auth');
Route::post('passes', [PassesController::class,'store'])->name('passes.store')->middleware('auth');
Route::get('passes/edit/{passes}', [PassesController::class,'edit'])->name('passes.edit')->middleware('auth');
Route::post('passes/{passes}', [PassesController::class,'update'])->name('passes.update')->middleware('auth');
Route::delete('passes/{id}', [PassesController::class,'destroy'])->name('passes.destroy');

Route::get('classes', [ClassesController::class,'index'])->name('classes.index')->middleware('auth');
Route::get('classes/create', [ClassesController::class,'create'])->name('classes.create')->middleware('auth');
Route::get('classes/{classes}', [ClassesController::class,'show'])->name('classes.show')->middleware('auth');
Route::post('classes', [ClassesController::class,'store'])->name('classes.store')->middleware('auth');
Route::get('classes/edit/{classes}', [ClassesController::class,'edit'])->name('classes.edit')->middleware('auth');
Route::post('classes/{classes}', [ClassesController::class,'update'])->name('classes.update')->middleware('auth');
Route::delete('classes/{id}', [ClassesController::class,'destroy'])->name('classes.destroy');

Route::get('schedule', [Schedule::class,'show'])->name('schedule');

Route::get('contact', [Contact::class,'show'])->name('contact');

Route::get('privacy', [Privacy::class,'show'])->name('privacy');

Route::get('rules', [Rules::class,'show'])->name('rules');

Route::middleware(['can:isAdmin'])->group(function(){
    Route::get('admin/users', [AdminController::class,'index'])->name('admin.users');
    Route::delete('admin/{id}', [AdminController::class,'destroy']);
});

Auth::routes();

Route::get('/logowanie', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
