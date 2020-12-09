<?php

namespace App\Http\Controllers;
use App\Body;
use App\Bodyl;
use App\User;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodys = Body::where('user_id',auth()->user()->user_id)->get();
        return view('backend.body.index',compact('bodys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $bodys= auth()->user()->bodys;
        return view('backend.body.create',compact('bodys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
             'home' => 'required',
             'away' => 'required',
        ]);
       
        $bodys = new Body();
        $bodys->user_id= auth()->user()->id;
        $bodys->home = $request->home;
        $bodys->away = $request->away;
        $bodys->plus = $request->plus;
        $bodys->minus = $request->minus;
        $bodys->gold = $request->gold;

        if($bodys->save());
        $user = User::find(auth()->user()->id);
        $user->save();
        return redirect()->back()->with('success', 'information inserted successfully!');
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
        Body::find($id)->delete();
        return redirect()->back()->with('success',' အောင်မြင်ပါသည်');
    }
}
