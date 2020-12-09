<?php

namespace App\Http\Controllers;
use App\Offnumber;
use App\Threed;
use Illuminate\Http\Request;

class OffnumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $offnumbers= auth()->user()->offnumbers;
        return view('number.offnumber',compact('offnumbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
             'offnumber' => 'required',
           
        ]);
    
        $offnumbers = new Offnumber();
        $offnumbers->user_id= auth()->user()->id;
        $offnumbers->offnumber = $request->input('offnumber');
       
        if($offnumbers->save());

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
        Offnumber::where('id',$id)->delete();
        return redirect()->back();
    }
}
