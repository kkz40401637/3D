<?php

namespace App\Http\Controllers;
use App\Football;
use Illuminate\Http\Request;
use App\User;
class FootballController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footballs = Football::where('user_id',auth()->user()->user_id)->get();
        $users = User::all();
        return view('backend.football.index',compact('footballs','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users = User::all();
        $footballs= auth()->user()->footballs;
        return view('backend.football.create',compact('footballs'));
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
        $footballs = new Football();
        $footballs->user_id= auth()->user()->id;
        $footballs->home = $request->home;
        $footballs->away = $request->away;
        $footballs->plus = $request->plus;
        $footballs->minus = $request->minus;
        $footballs->gold = $request->gold;

        
         if($footballs->save());

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
    
        Football::find($id)->delete();
        return redirect()->route('footballs.create')->with('success','deleted successfully');
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("footballs")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Deleted successfully."]);
    }
}
