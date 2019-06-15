<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\MessageBag;
use App\User;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('frontend.login');
    }

    public function postLogin(Request $request){
    	$pattern = [
            'email'=>'required|email',
            'password' => 'required|min:6'
        ];
        $messages= [
            'email.required' => 'Email la truong bat buoc',
            'email.email' => 'Email khong dung dinh dang',
            'password.required' => 'Password la truong bat buoc',
            'password.password' => 'Password phai co it nhat 6 ki tu'
        ];
        $validator = Validator::make($request->all(),$pattern,$messages);

    	if ($validator->fails()){
    		return response()->json([
    			'error' => true,
    			'message' => $validator->errors()
    		], 200);
    	} else {
    		$email = $request->input('email');
    		$password = $request->input('password');
    		$attempt = Auth::attempt(['email' => $email, 'password' => $password]);
    		$attempt = false;
    		if ($attempt){
    			return response()->json([
    				'error' => false,
    				'message' => 'success'
    			], 200);
    		} else {
    			$errors = new MessageBag(['errorLogin' => 'Email or Password incorrect']);
    			return response()->json([
    				'error' => true,
    				'message' => $errors
    			]);
    		}
    	}
    }
}
