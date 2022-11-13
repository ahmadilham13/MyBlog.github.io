<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:5','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // untuk memenkripsikan password
        $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfully! please Login');
    
        return redirect('/login');
    }
}
