<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // Người dùng đã đăng nhập
            $user = Auth::user();
        } else {
            // Người dùng chưa đăng nhập
            echo "Bạn chưa đăng nhập";
        }
        return view('user.index', compact('user'));
    }
}