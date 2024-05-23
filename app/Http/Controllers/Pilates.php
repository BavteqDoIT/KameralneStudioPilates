<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pilates extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('pilates', ['username' => $user->name]);
        } else {
            return view('pilates', ['username' => 'Nieznajomy']);
        }
    }
}
