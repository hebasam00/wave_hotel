<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //---------------------------------------- DISPLAY USERS -------------------------------------//
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    //---------------------------------------- EDIT USER -------------------------------------//
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    //---------------------------------------- UPDATE USER -------------------------------------//
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // VALIDATE INPUT DATA
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|in:admin,vendor,user',
            'status' => 'required|in:active,inactive',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // UPDATE USER WITH VALIDATED DATA
        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    //---------------------------------------- DELETE USER -------------------------------------//
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    //---------------------------------------- SHOW PROFILE -------------------------------------//
    public function showProfile()
    {
        $user = Auth::user();
        return view('admin.profile.show', compact('user'));
    }

    //---------------------------------------- UPDATE PROFILE -------------------------------------//
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // VALIDATE INPUT DATA
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        // UPDATE USER DATA
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;

        // Update password only if provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile.show')->with('success', 'Profile updated successfully');
    }
}
