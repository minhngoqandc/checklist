<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 
class LoginController extends Controller
{
    public function getLogin(){
    	return view('frontend.login');
    }

    public function postLogin(Request $request){
    	die("XXX");
    }
}
