<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request){
        $hasil = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);

        $hasil['password'] = bcrypt($hasil ['password']);

        User::create($hasil);

        return redirect('/login')->with('success', 'Akun Berhasil Dibuat, Silahkan Login');
    }
}
