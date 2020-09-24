<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
     return view('auth.login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password' =>'required',
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
        return view('dashboard');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }



    function logout()
    {
     Auth::logout();
     return view('auth.login');
    }
}
