<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login(){
        return view('part.login');
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ],[
            'email' => 'Email cant be null',
            'password' => 'Password cant be null',
            'email.exists' => 'Email not found',
            'password.min' => 'Password must be 8 character'
        ]);

        $infologin = [ 
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(auth()->user()->level == 1){
                return redirect('/sop');
                
            }elseif(auth()->user()->level == 2){
                return redirect('/home');
            }
        }else{
            Alert::error('Error', 'Email or Password incorect');
            return redirect('/login');
        }
    }
    

    public function logout(Request $req){
        Auth::logout();
        return redirect('/');
    }
}
