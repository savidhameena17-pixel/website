<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class authcontroller extends Controller
{
    public function showregister()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate([
            "name"=>'required',
            "email"=>'required|email|unique:users',
            "phone"=>'required',
            "password"=>'required',
        ]);
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'password'=>Hash::make($request->input('password')),
        ]);
        return redirect('/login')->with('success','registeration successful');
    }
    public function showlogin(){
        return view('login');
    }
    public function login(Request $request){
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect('/dashboard');
            }
            return back()->with('error','invalid email or password');
    }
    public function contact(Request $request)
    {
    return back()->with('success','Your suggestion has been submitted successfully!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
