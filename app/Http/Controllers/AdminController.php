<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Offnumber;
use App\Money;
use Illuminate\Support\Facades\Hash;
use DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $users=User::role('admin')->get();
        $moneys= auth()->user()->moneys;
        return view('backend.admins.index',compact('users','moneys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admins.create');

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
            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['user_id'] = auth()->user()->id;
        $user = User::create($input);
        $user->assignRole('admin');
        return redirect()->route('admins.index',compact('offnumbers'))->with('success','Admin created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.admins.edit',compact('user'));
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

        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required|email',

            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();

        $user = User::find($id);
        $user->update($input);
        $input['password'] = Hash::make($input['password']);
        $input['user_id'] = auth()->user()->id;
        $user->assignRole('admin');
        return redirect()->route('admins.index')->with('success','Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admins.index')->with('success','Admin deleted successfully');
    }
}
