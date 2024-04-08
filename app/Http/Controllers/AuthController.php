<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showlogin(){
        return view('tasks.login');
    }
    public function showregister(){
        return view('tasks.register');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        }
        else {
            return redirect(route('login'))->with("error","invalid credentials");
        }
    }
    public function register(Request $request)
    {
    $validatedData = $request->validate([
        'username' => 'required|string|max:255|min:4',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string',
    ]);
    $user = User::create([
        'name' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);
    return redirect('/')->with('success', 'Registration successful.');
}

public function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('login'));
}

    
}

