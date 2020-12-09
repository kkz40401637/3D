<?php

namespace App\Http\Controllers;
use App\Towd;
use App\User;
use Illuminate\Http\Request;

class TowdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
       
        $users = User::all();
        $towds= auth()->user()->towds;
        // $reports = Report::all();
        return view('backend.towd.index',compact('users','towds','user'));

    }
     public function index2(User $user)
    {
        $users = User::all();
        $towds= $user->towds;

        // $reports = Report::all();
        return view('backend.towd.index2',compact('users','towds','user'));
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $users = User::all();
        $towds= auth()->user()->towds;
        return view('backend.towd.create',compact('towds','users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(auth()->user()->money < $request->moneya){
         
           return back()->with('error','လူကြီးမင်း၏လက်ကျန်ငွေမလုံလောက်ပါ၍ထပ်မံဖြည့်သွင့်ပါ');}
           else{
        $towds = new Towd();
        $towds->user_id= auth()->user()->id;
        
        $towds->towda = $request->towda;
        $towds->moneya = $request->moneya;

        $towds->towdb = $request->towdb;
        $towds->moneyb = $request->moneyb;

        $towds->towdc = $request->towdc;
        $towds->moneyc = $request->moneyc;

        $towds->towdd = $request->towdd;
        $towds->moneyd = $request->moneyd;

        $towds->towde = $request->towde;
        $towds->moneye = $request->moneye;
       
        if($towds->save());
        $user = User::find(auth()->user()->id);
        $total=  $towds->moneya+ $towds->moneyb+ $towds->moneyc+$towds->moneyd+ $towds->moneye;
        $user->money = auth()->user()->money-$total;
        $user->save();

        return redirect()->back()->with('success', 'လူးကြီးမင်း၏လုပ်ဆောင်မူ့အောင်မြင်ပါသည်');}
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
