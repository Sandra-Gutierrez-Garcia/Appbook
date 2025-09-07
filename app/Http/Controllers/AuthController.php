<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Métodos de Registro
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

            return redirect()->route('login')->with('success', 'Registro exitoso. Por favor, inicia sesión.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error al registrar usuario.']);
        }
    }

    // Métodos de Login
    public function showLogin()
    {
        return view('/login');
    }

    public function login(UserRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no son correctas.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
