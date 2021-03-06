<?php

namespace App\Http\Controllers;
use App\Report;
use App\User;
use App\Offnumber;
use Illuminate\Http\Request;

class ReportContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offnumbers = Offnumber::all();
        $users = User::all();
        $reports= auth()->user()->reports;


        // $reports = Report::all();
        return view('backend.report.report',compact('users','reports','offnumbers'));
    }
    public function index2(User $user)
    {
        $offnumbers = Offnumber::all();
        $users = User::all();
        $reports= $user->reports;

        // $reports = Report::all();
        return view('backend.report.report2',compact('users','reports','offnumbers','user'));
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
        if(auth()->user()->money < $request->ammount){
         
           return back()->with('error','လူကြီးမင်း၏လက်ကျန်ငွေမလုံလောက်ပါ၍ထပ်မံဖြည့်သွင့်ပါ');}
           else{
            $reports = new Report();
            $reports->user_id= auth()->user()->id;
 
            $reports->number = $request->input('number');
            $reports->ammount = $request->input('ammount');
 
            if($reports->save());
 
            $user = User::find(auth()->user()->id);
            $user->money = auth()->user()->money-$reports->ammount;
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
        Report::find($id)->delete();
        return redirect('reports');
    }
}
