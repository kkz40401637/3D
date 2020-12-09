<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Report;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Offnumber;
use App\Body;
use App\Football;
use App\Money;
use Validator;
use Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'email'=> 'required|email',
            'phno' => 'required|numeric|min:8',
            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['user_id'] = 2;
        $user = User::create($input);

       $user->assignRole('user');
       Auth::login($user);
       $users=auth()->user()->users->count();
       $userss  =Auth::user()->users->sum('money');

       $offnumber=auth()->user()->offnumbers->count();
       $offnumbers = Offnumber::where('user_id',auth()->user()->user_id)->count();
       $bodies = Body::where('user_id',auth()->user()->user_id)->count();
       $footballs = Football::where('user_id',auth()->user()->user_id)->count();
       $moneys= auth()->user()->moneys;

       return view('dashboard',compact('users','offnumbers','bodies','footballs','offnumber','userss','moneys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}