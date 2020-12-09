<?php

namespace App\Http\Controllers;
use App\User;
use App\Offnumber;
use App\Body;
use App\Football;
use App\Money;
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


        $users=auth()->user()->users->count();
        $userss  =Auth::user()->users->sum('money');
        $offnumber=auth()->user()->offnumbers->count();
        $offnumbers = Offnumber::where('user_id',auth()->user()->user_id)->count();
        $bodies = Body::where('user_id',auth()->user()->user_id)->count();
        $footballs = Football::where('user_id',auth()->user()->user_id)->count();
        $moneys= auth()->user()->moneys;
        return view('dashboard',compact('users','offnumbers','bodies','footballs','offnumber','userss','moneys'));
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
        $userss  =Auth::user()->users->sum('money');

        $offnumber=auth()->user()->offnumbers->count();
        $offnumbers = Offnumber::where('user_id',auth()->user()->user_id)->count();
        $bodies = Body::where('user_id',auth()->user()->user_id)->count();
        $footballs = Football::where('user_id',auth()->user()->user_id)->count();
        $moneys= auth()->user()->moneys;
        return view('dashboard',compact('users','offnumbers','bodies','footballs','offnumber','userss','moneys'));
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