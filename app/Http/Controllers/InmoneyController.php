<?php

namespace App\Http\Controllers;
use App\Inmoney;
use App\User;
use Illuminate\Http\Request;

class InmoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        $inmoneys = new Inmoney();
        $inmoneys->user_id= auth()->user()->id;
        $inmoneys->money = $request->input('money');
        $inmoneys->textid = $request->input('textid');
        if($inmoneys->save());

        $user = User::find(auth()->user()->id);
        $user->save();

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
        // Inmoney::find($id)->delete();
        // return redirect()->back();
        $inmoneys =  Inmoney::find($id);
        $inmoneys->ban_status = 'ဖြည့်ပြိး';
        $inmoneys->save();
        return redirect()->back()->with('success', 'ငွေလွဲပြီးကြောင်းအကြောင်းကြားအပ်ပါသည်/');
    }
}
