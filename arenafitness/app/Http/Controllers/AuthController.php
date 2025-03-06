<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }


    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ], [
            'name.required' => 'Jméno je povinné pole',
            'name.min' => 'Jméno musí mít alespoň 5 znaků',
            'email.required' => 'Email je povinné pole',
            'email.email' => 'Email musí být ve správném formátu',
            'email.unique' => 'Tento email je již registrován',
            'password.required' => 'Heslo je povinné pole',
            'password.min' => 'Heslo musí mít alespoň 8 znaků',
        ]);

        $user = User::create([
            "name" => $validated['name'],
            "email" => $validated['email'],
            "password" => $validated['password'],
        ]);

        return redirect('/login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

            
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Špatný email nebo heslo',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
{
    Auth::logout(); // Odhlásí uživatele

    $request->session()->invalidate(); // Invalidační session
    $request->session()->regenerateToken(); // Obnova CSRF tokenu

    return redirect('/login'); // Přesměrování na login
}
}

