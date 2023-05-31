<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')->with('error', 'Email or password is incorrect');
    }

    protected function authenticated()
    {
        if(Auth::user()->role == 0){
            return redirect()->route('admin.dashboard')->with('success', 'Welcome to admin dashboard');
        }
        else{
            return redirect('/')->with('success', 'Welcome to home');
        }
    }
}
