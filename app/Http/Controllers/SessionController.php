<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function sessionPage(Request $request) {
        if($request->session()->has('name')) {
            return view('sessionpage');
        } else {
             $request->session()->flash('error','Access Denied');
            return redirect('mylogin');
        }          
     }
    
    public function session_set(Request $request) {
        $request->session()->put('name', 'sourabh');
        echo "Session Set";    
    }
    
    public function session_get(Request $request) {
        echo $request->session()->get('name');
    }

    public function session_forget(Request $request) {
        $request->session()->forget('name');
        echo "Session forget";
    }

    public function session_check(Request $request) {
        if($request->session()->has('name')) {
                echo "Yes";
        } else {
                echo "No";
        }   
    }

    public function userLogin(Request $request) { 
                  
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $email = $request -> input('email');
        $password = $request -> input('password');

        if($email == "sourabh@gmail.com" && $password == "12345" ) {
            $request->session()->put('name', 'sourabh');
            return redirect('sessionpage');
            
        } else {
            $request->session()->flash('error' ,'Please enter valid login details');
            return redirect('mylogin');
        }           
    }
}
