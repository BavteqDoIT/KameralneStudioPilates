<?php

namespace App\Http\Controllers;

use App\Models\Passes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Passes $passes): View
    {
        if (Auth::check()) {
            $currentUser = Auth::user();
            $passes = Passes::find($currentUser->passes_id);
            return view("users.index", [
                'username' => $currentUser->name,
                'user' => $currentUser,
                'passes' => $passes
            ]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
