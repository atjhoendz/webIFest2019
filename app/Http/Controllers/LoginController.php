<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function do_login(){
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return redirect('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else{
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            if(Auth::attempt($userdata)){
                echo 'success';
            }else{
                return redirect('login');
            }
        }
    }

    public function do_logout(){
        Auth::logout();
        return redirect('login');
    }
}
