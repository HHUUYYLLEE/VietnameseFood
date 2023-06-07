<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', 'max:20'],
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10'
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],
            'name' => "",
            'address' => $data['email'],
            'role' => 1
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register()
    {
        $this->validator(request()->all())->validate();

        $this->create(request()->all());

        return redirect()->route('login');
    }
}