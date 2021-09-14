<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){

    	return view('admin.login');
    }

    public function loginConfirm(Request $request){

    	$data = $request->only('email', 'password');

    	
    	/* $data['password'] = Hash::make($data['password']);*/
    	if (Auth::attempt($data)) {
    		return redirect()->route('dashboard');
    	} else {
    		// return redirect()->route('login')->with('error','Invalid Email Or Password');
            Session::flash('fail', 'email or password dones');
            return redirect()->back();
    	}
    }

    public function logout(Request $r)
    {
    	Auth::logout();

    	return redirect()->route('login');
    }
}
