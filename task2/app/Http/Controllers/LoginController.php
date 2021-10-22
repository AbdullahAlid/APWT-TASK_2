<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
        $err="";
       return view('pages.login')->with('err',$err);
    }
    public function loginCheck(Request $request)
    {
        $loginInfo=array("username"=>"Abdullah","password"=>"1234");

        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Enter your username',
            'password.required'=>'Enter your password'
        ]);
        if($request->username==$loginInfo["username"] and $request->password==$loginInfo["password"])
        {
            return "ok";
        }
        else{
            $error_message="Invalid username or password";
            return view('pages.login')->with('err',$error_message);
        }
        
    }
    public function registration()
    {   
       return view('pages.registration');
    }
    public function registrationCheck(Request $request)
    { 
        $this->validate($request,[
            'name'=>'required|min:5',
            'id'=>'required',
            'dob'=>'required'
        ],[
            'name.required'=>'Enter your name',
            'id.required'=>'Enter your id',
            'dob.required'=>'Enter your dob'
        ]);
        return "Registration Successful";
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function contactCheck(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'phone'=>'required',
           
        ],[
            'email.required'=>'Enter your email',
            'email.email'=>'Invalid email format',
            'phone.required'=>'Enter your mobile'
        ]);
        return "Contact Added successsfully";
    }
}
