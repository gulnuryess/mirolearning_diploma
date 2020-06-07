<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function choice()
    {
        return view('auth.choice');
    }

    public function teacher()
    {
        return view('auth.teacher');
    }

    public function student()
    {
        return view('auth.student');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register(RegisterRequest $registerRequest)
    {
        $user = User::create($registerRequest->all());
        Session::push('user', $user);
        Auth::login($user);

        return redirect()->route('index');
    }

    public function sendLogin(LoginRequest $request)
    {
        $user = User::where('email', $request->get('email'))->where('password', $request->get('password'))->first();
        if(isset($user)) {
            Session::push('user', $user);
            Auth::login($user);
            return redirect()->route('index');
        }

        return redirect()->route('login')->withErrors(['Not found. Try Again']);
    }
}
