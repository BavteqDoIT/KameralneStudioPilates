<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Schedule extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('schedule', ['username' => $user->name]);
        } else {
            return view('schedule', ['username' => 'Nieznajomy']);
        }
    }
}
