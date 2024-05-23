<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Studio extends Controller
{
    public function show(){
        if (Auth::check()) {
            $user = Auth::user();
            return view('studio', ['username' => $user->name]);
        } else {
            return view('studio', ['username' => 'Nieznajomy']);
        }
    }
}
