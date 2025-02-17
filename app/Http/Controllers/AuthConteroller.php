<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthConteroller extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function handleRegister(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        $validatedUser = $request->validated();

        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->password, $user->password)) {
            return "Password notogri";
        }
        if (Auth::attempt($validatedUser)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function errorPage()
    {
        return view('auth.404page');
    }
}
