<?php

namespace App\Http\Controllers;
use App\Drive;
use App\User;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drives = Drive::all();
        return view('backend.football.show',compact('drives','users'));
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
       
        $foots = new Drive();
        $foots->user_id= auth()->user()->id;
        $foots->foot = $request->foot;
        $foots->foota = $request->foota;
        $foots->footb = $request->footb;
        $foots->footc = $request->footc;
        $foots->footd = $request->footd;

        $foots->foote = $request->foote;
        $foots->footf = $request->footf;
        $foots->footg = $request->footg;
        $foots->footh = $request->footh;
        $foots->footi = $request->footi;
        $foots->money = $request->money;

           if($foots->save());

           return redirect()->back()->with('success', 'Number information inserted successfully!');
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
