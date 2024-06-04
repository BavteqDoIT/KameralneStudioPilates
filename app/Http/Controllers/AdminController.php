<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('admin.index', ['username' => $user->name, 'users' => User::paginate(3)]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = new User($request->all());
        $user -> save();
        return redirect(route('admin.users'));
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
    public function edit(string $id): View
    {
        if (Auth::check()) {
            $currentUser = Auth::user();
            $userToEdit = User::findOrFail($id);
            $roles = UserRole::TYPES;
            return view("admin.edit", [
                'username' => $currentUser->name,
                'user' => $userToEdit,
                'roles' => $roles
            ]);
        } else {
            return view('auth.login', ['username' => 'Nieznajomy']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $user->fill($request->all());
        $user->save();
        return redirect(route('admin.users'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = User::find($id);
        $delete->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
