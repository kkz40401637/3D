<?php

namespace App\Http\Controllers;
use App\Body;
use App\Bodyl;
use App\User;
use Illuminate\Http\Request;

class BodylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodysl = Bodyl::all();
        return view('backend.body.show',compact('bodysl'));
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

        $bodysl = new Bodyl();
        $bodysl->user_id= auth()->user()->id;
        
        $bodysl->bodya = $request->bodya;
        $bodysl->moneya = $request->moneya;

        $bodysl->bodyb = $request->bodyb;
        $bodysl->moneyb = $request->moneyb;

        $bodysl->bodyc = $request->bodyc;
        $bodysl->moneyc = $request->moneyc;

        $bodysl->bodyd = $request->bodyd;
        $bodysl->moneyd = $request->moneyd;

        $bodysl->bodye = $request->bodye;
        $bodysl->moneye = $request->moneye;
       
           if($bodysl->save());

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
