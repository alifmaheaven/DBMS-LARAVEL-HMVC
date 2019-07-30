<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth; 
use Validator;

class UserController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return redirect('partner');
        }
    }

    
    public function login(){
        if(Auth::attempt(['user_email' => request('user_email'), 'password' => request('user_password')])){ 
                $user = Auth::user(); 
                Session::put('user_name',$user->user_name);
                Session::put('user_nik',$user->user_nik);

                Session::put('id_user',$user->id_user);
                Session::put('id_profile',$user->id_profile);
                Session::put('login',TRUE);
                if ($user) {
                   
                    return redirect('');
                }
            
        } 
        else{ 
            
            return redirect('login')->with('alert','email dan password salah');
        } 
    

    }

    public function logout(){
        Session::flush();
        return redirect('')->with('alert','Kamu sudah logout');
    }

}
