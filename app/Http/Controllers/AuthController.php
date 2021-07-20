<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function register()
    {
        return view('auths.register');
    }
    public function store(Request $request)
        {
            \App\user::create([
                'nik' => $request->get('nik'),
                'name' => $request->get('name'),
                'username' => $request->get('username'),
                'password' => Hash::make($request->get('password')),
                'tlp' => $request->get('tlp')
            ]);
            return redirect('/login')->with('sukses','Data Berhasil Ditambah');
        }
    public function postlogin(Request $request)
    {
        
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/pengaduan');
            
        }
        
        return redirect('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    //
}
