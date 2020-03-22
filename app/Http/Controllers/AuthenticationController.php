<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function userRegister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ]);

        return redirect('login');
    }

    public function userLogin(Request $request)
    {
        Auth::attempt([
          'email' => $request->email,
          'password' => $request->password,
        ]);

        if(Auth::check()) {
          return redirect('dashboard');
        }

        return back();
    }

    public function dashboard()
    {
        $data['user'] = Auth::user();

        return view('dashboard', $data);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
