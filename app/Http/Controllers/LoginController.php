<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validate the request data before storing
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'string']
        ]);
        //attempt to log the user in
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            //if successful then redirect to the intended location
            return redirect()->intended(route('posts.index'));
        } else {
            //if unsuccessful then redirect back to the login with the form data
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        //logout the user
        //auth is a helper function that returns the default guard
        //guard is a way to authenticate users
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('posts.index');
    }
}
