<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        // Jika admin sudah login, arahkan ke dashboard admin
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
            // Jika bukan admin, logout dan arahkan ke login admin
            Auth::logout();
        }

        return view('admin.sesi.index');  // pastikan ini view login admin
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek apakah user yang login adalah admin
            if (Auth::user()->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }

            // Jika bukan admin, logout dan kembalikan error
            Auth::logout();
            return back()->withErrors([
                'email' => 'Akses hanya untuk admin.'
            ])->withInput();
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!'
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');  // redirect ke login admin
    }
}
