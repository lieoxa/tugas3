<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'nohp' => 'required|string|max:20',
            'password' => 'required|min:8|confirmed',
        ],[
            'name.required' => 'Kolom nama wajib diisi.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'nohp.required' => 'Kolom nomor HP wajib diisi.',
            'password.required' => 'Kolom sandi wajib diisi.',
            'password.min' => 'Panjang sandi minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi sandi tidak cocok.',
        ]);

        // Buat instance User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->password = Hash::make($request->password);

        // Simpan user ke database
        $user->save();

        return view('login');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetails = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetails)) {
            return redirect('/movie')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }

    public function movie()
    {
        return view('user.movie');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
    public function serial()
    {
        return view('user.serial');
    }
    public function search()
    {
        return view('user.search');
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function watchlist()
    {
        return view('user.watchlist');
    }
    public function film()
    {
        return view('user.film');
    }
    public function podcast()
    {
        return view('user.podcast');
    }
    public function toystory()
    {
        return view('user.toystory');
    }
    public function mario()
    {
        return view('user.mario');
    }
    public function spy()
    {
        return view('user.spy');
    }
    public function iron3()
    {
        return view('user.iron3');
    }
    public function century()
    {
        return view('user.century');
    }
    public function jawa()
    {
        return view('user.jawa');
    }
    public function pertaruhan()
    {
        return view('user.pertaruhan');
    }
}