<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Contact extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('contact', ['username' => $user->name]);
        } else {
            return view('contact', ['username' => 'Nieznajomy']);
        }
    }
}
