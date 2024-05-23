<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUs extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('aboutus', ['username' => $user->name]);
        } else {
            return view('aboutus', ['username' => 'Nieznajomy']);
        }
    }
}
