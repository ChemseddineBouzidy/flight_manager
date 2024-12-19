<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function show()
    {


        return view("login.create");
    }





    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $credentials =    ["email" => $email, "password" => $password];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            //connected
            $request->session()->regenerate();
            return to_route("Flight.create")->with("success","Vous etes bien connecte". $email ."  .");
        }else{
            //not connected
            return back()->withErrors([
                "email"=> "Email ou mot de pass incorrect.",
            ])->onlyInput(  "email");
        }

       
    }
    public function logout()
    {
      Session::flush();
      
        Auth::logout();

       return to_route('login')->with("success","Vous etes bien deconnecte");
    }
}
