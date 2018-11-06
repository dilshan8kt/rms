<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class AuthController extends Controller
{
    public function signin(Request $request){
        $data = $request->only('email','password');
        // dd($data);
        if(Auth::attempt($data)){
            $user = User::find(Auth::user()->id);
            
            if($user->status){
                return redirect()->route('dashboard')->with('loggedin','Welcome back');
            }
            return redirect()->back()->with('error','Login Error, Account Deactivated.');
        }
        return redirect()->back()->with('error','Invalid Credentials')->withInput();
    }

    public function signout(){
        Auth::Logout();
        session::flush();
        return redirect('/')->with('logout', 'Successfully Logout');
    }
}
