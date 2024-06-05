<?php

namespace App\Http\Controllers;

use App\Models\Passes;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("passes.index", ['username' => $user->name,'passes' => Passes::paginate(3)]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("passes.create", ['username' => $user->name]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $passes = new Passes($request->all());
        $passes -> save();
        return redirect(route('passes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Passes $passes): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("passes.show", ['username' => $user->name, 'passes' => $passes]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passes $passes): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("passes.edit", ['username' => $user->name,'passes' => $passes]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Passes $passes): RedirectResponse
    {
        $passes->fill($request->all());
        $passes->save();
        return redirect(route('passes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passes $passes, $id)
    {
        $delete = Passes::find($id);
        $delete->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function buy(Passes $passes): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("passes.buy", ['username' => $user->name,'passes' => $passes]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function transaction(Request $request, Passes $passes): RedirectResponse
{
    $user = $request->user();
    $user->passes_id = $passes->id;
    $user->save();

    return redirect(route('passes.index'));
}

}
