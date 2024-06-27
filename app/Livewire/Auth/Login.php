<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.auth.login');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $request->validate(
            [
                'email' => 'required|max:255',
                'password' => 'required|min:8',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi'
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        } else {
            return redirect('sesi')->with('error', 'Username dan password yang dimasukkan tidak valid'); // Menggunakan with untuk meneruskan pesan kesalahan
        }
    }

}