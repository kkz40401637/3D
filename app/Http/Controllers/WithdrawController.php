<?php

namespace App\Http\Controllers;
use App\Withdraw;
use App\Money;
use App\User;
use App\Inmoney;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
       
        $moneys = Money::where('user_id',auth()->user()->user_id)->get();
        $wdraws= auth()->user()->wdraws('ban_status','1')->get();
        $inmoneys= auth()->user()->inmoneys;
        return view('backend.wdraw.index',compact('user','wdraws','moneys','inmoneys'));
    
    }
    public function index2(User $user)
    {
        $users = User::all();
        $wdraws= $user->wdraws;

        return view('backend.report.wihdraw',compact('users','wdraws','user'));
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
        $this->validate($request, [
            'wmoney' => 'required',
            'phno' => 'required|numeric|min:8',
            'type' => 'required',
        ]);

        if(auth()->user()->money < $request->wmoney){

            return back()->with('error','လူကြီးမင်း၏လက်ကျန်ငွေမလုံလောက်ပါ၍ထပ်မံဖြည့်သွင့်ပါ');}
            else{
             $wdraws = new Withdraw();
             $wdraws->user_id= auth()->user()->id;

             $wdraws->wmoney = $request->input('wmoney');
             $wdraws->phno = $request->input('phno');
             $wdraws->type = $request->input('type');

             if($wdraws->save());

             $user = User::find(auth()->user()->id);
             $user->money = auth()->user()->money-$wdraws->wmoney;
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
        $moneys = Money::find($id);
        $wdraws = Withdraw::find($id);
        return view('backend.Receive.edit',compact('moneys','wdraws'));
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
        $wdraws = Withdraw::find($id);
        $wdraws->ban_status = 'လွဲပြီး';
        $wdraws->save();
        return redirect()->back()->with('success', 'ငွေလွဲပြီးကြောင်းအကြောင်းကြားအပ်ပါသည်/');

    }
}