<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ofert extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('ofert', ['username' => $user->name]);
        } else {
            return view('ofert', ['username' => 'Nieznajomy']);
        }
    }
}
