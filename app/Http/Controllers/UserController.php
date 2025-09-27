<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Menu;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginReturnVal(Request $request){
        $cred = $request->validate ([
            'email' => 'required', 
            'password' => 'required'
        ],[
            'email.required' => 'Must be filled', 
            'password.required' => 'Must be filled'
        ]);

        if($request->remember){
            Cookie::queue('cookie',$request->email,120);
        }

        if(Auth::attempt($cred,true)){
            Session::put('thissession',$cred);
            return redirect('/');
        }else{
            return back()->withErrors([
                'general'=>'Invalid credentials'
            ])->withInput($request->only('password','email'));
        }
        
    }

    public function logout(Request $req){
        Auth::logout();
        return redirect('/login');
    }

    public function home(){
        $menus = Menu::paginate(3);
        return view('homepage', compact('menus'));
    }

    public function register(){
        return view('register');
    }

    public function registerReqVal(Request $request){
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|numeric|min:8|confirmed',
            'phone_number' => 'required|numeric|max_digits:15|unique:users,phone_number'
        ]);

        $user = User::create([
            'name' => $validation['name'],
            'email' => $validation['email'],
            'password' =>$validation['password'],
            'phone_number' => $validation['phone_number'],
        ]);
        Auth::login($user);
        return redirect()->route('home')->with('success','Registration successful');
        
    }

    public function profile(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }

}