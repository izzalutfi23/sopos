<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index(){
    	return view('login/login');
    }

    public function postlogin(Request $request){
    	if(Auth::attempt(['name' => $request->name, 'password' => $request->password, 'role' => 'admin'])){
    		return redirect('/dashboard');
    	}else if(Auth::attempt(['name' => $request->name, 'password' => $request->password, 'role' => 'kasir'])){
            return redirect('/kasir');
        }
        else{
            return redirect('/');
        }
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
