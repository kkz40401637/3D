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
        $users = User::all();
        $bodyls= auth()->user()->bodyls;
        return view('backend.body.show',compact('users','bodyls'));
    }
    public function index2(User $user)
    {

        $users = User::all();
        $bodyls= $user->bodyls;
        return view('backend.body.show2',compact('users','bodyls','user'));
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
        if(auth()->user()->money < $request->moneya){

           return back()->with('error','လူကြီးမင်း၏လက်ကျန်ငွေမလုံလောက်ပါ၍ထပ်မံဖြည့်သွင့်ပါ');}
           else{
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
        $user = User::find(auth()->user()->id);
        $total=  $bodysl->moneya+ $bodysl->moneyb+ $bodysl->moneyc+$bodysl->moneyd+ $bodysl->moneye;
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
        Bodyl::find($id)->delete();
        return redirect()->back()->with('success',' အောင်မြင်ပါသည်');
    }
}
