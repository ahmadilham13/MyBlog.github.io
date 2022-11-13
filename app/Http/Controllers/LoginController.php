<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login Sucessfully');
        }

        // jika gagal atau tidak memenuhi kondisi di atas
        return back()->with('LoginError', 'Login Failed');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        // siapa session tidak valid lagi
        $request->session()->invalidate();
        // generate ulang token untuk meminimalisir bajakan
        $request->session()->regenerateToken();

        // pesan berhasil logout
        $request->session()->flash('LogoutSuccess','Logout Successfully');
        return redirect('/');
    }
}
