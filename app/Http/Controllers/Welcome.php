<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Welcome extends Controller
{
    public function show() {
        if (Auth::check()) {
            $user = Auth::user();
            return view('welcome', ['username' => $user->name]);
        } else {
            return view('welcome', ['username' => 'Nieznajomy']);
        }
    }
}
