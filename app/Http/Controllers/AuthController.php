<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Registration Methods
    public function create()
    {
        return view('/register');
    }

    public function store(UserRequest $request)
    {
        try {
            $validated = $request->validated();
            $validated['password'] = Hash::make($validated['password']);

            $user = User::create($validated);
            $user->assignRole('reader');

            return redirect('/login')->with('success', 'Registration successful. Please log in.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error registering user.']);
        }
    }

    // Login Methods
    public function showLogin()
    {
        return view('/login');
    }

    public function login(UserRequest $request)
    {
        try {
            $credentials = $request->validated();

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/users/' . Auth::id());
            }

            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => 'These credentials do not match our records.']);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error during login.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
