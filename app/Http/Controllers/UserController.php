<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['profile', 'role'])->latest()->paginate(10);
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function changeRole(User $user)
    {
        $this->authorize('change-role');

        $roles = Role::pluck('name', 'id')->toArray();

        return view('users.change_role', compact('user', 'roles'));
    }

    public function updateRole(Request $request, User $user)
    {
        $this->authorize('change-role');

        $user->update(['role_id' => $request->role_id]);

        return redirect()->route('users.index')->withMessage('Successfully Updated Role');
    }
    
}
