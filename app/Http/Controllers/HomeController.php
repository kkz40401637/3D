<?php

namespace App\Http\Controllers;
use App\User;
use App\Offnumber;
use App\Withdraw;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $wdraws= auth()->user()->wdraws;
        return view('home',compact('users','wdraws','moneys'));
    }
}
