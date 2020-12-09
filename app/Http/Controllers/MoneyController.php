<?php

namespace App\Http\Controllers;
use App\Money;
use App\Withdraw;
use App\User;
use App\Inmoney;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users=auth()->user()->users;
        $moneys= auth()->user()->moneys;
        $inmoneys= Inmoney::all();
        // $wdraws = Withdraw::All();
        // $wdraws = Withdraw::where('ban_status', '0')->get();
        return view('backend.Receive.index',compact('moneys','users','inmoneys'));
     
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

                'phno' => 'required',
                'type'=> 'required',
            ]);
            
        $moneys = new Money();
        $moneys->user_id= auth()->user()->id;
        $moneys->phno = $request->input('phno');
        $moneys->type = $request->input('type');
 
        if($moneys->save());
 
      
        return redirect()->back()->with('success', 'လူးကြီးမင်း၏လုပ်ဆောင်မူ့အောင်မြင်ပါသည်');

           
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
        $moneys = Money::find($id);
        return view('backend.Receive.edit',compact('moneys'));

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
        $input = $request->all();
        $moneys =  Money::find($id);
        $moneys->user_id= auth()->user()->id;
        $moneys->update($input);
        return redirect()->route('moneys.index')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $moneys =  Money::find($id);
        $moneys->ban_status = 'လွဲပြီး';
        $moneys->save();
        return redirect()->back()->with('success', 'ငွေလွဲပြီးကြောင်းအကြောင်းကြားအပ်ပါသည်/');

    }
}
