<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Privacy extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('privacy', ['username' => $user->name]);
        } else {
            return view('privacy', ['username' => 'Nieznajomy']);
        }
    }
}
