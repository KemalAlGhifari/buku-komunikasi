<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
       
        return view('dashboard-admin/login/login');
    }
    public function postlogin (Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == 'user'){
                return redirect()->intended('/guru');
            }else if($user->level == 'admin'){
                return redirect()->intended('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
