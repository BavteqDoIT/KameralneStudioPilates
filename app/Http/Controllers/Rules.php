<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Rules extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('rules', ['username' => $user->name]);
        } else {
            return view('rules', ['username' => 'Nieznajomy']);
        }
    }
}
