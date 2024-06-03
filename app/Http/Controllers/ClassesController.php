<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("classes.index", ['username' => $user->name,'classes' => Classes::paginate(3)]);
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
            return view("classes.create", ['username' => $user->name]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $classes = new Classes($request->all());
        $classes -> save();
        return redirect(route('classes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("classes.show", ['username' => $user->name, 'classes' => $classes]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $classes): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("classes.edit", ['username' => $user->name,'classes' => $classes]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $classes): RedirectResponse
    {
        $classes->fill($request->all());
        $classes->save();
        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $classes,$id)
    {

        $delete = Classes::find($id);
        $delete->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
