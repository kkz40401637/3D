<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
     return view('auth.login');
    }
    public function index1()
    {
        // $users = User::count();
        // $users=auth()->user()->users;
        $users=auth()->user()->users->count();
        return view('dashboard',compact('users'));
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
        $users=auth()->user()->users->count();
        return view('dashboard',compact('users'));
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
