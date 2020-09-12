<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $v = Validator::make($request->all(),[
            'name'=>'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if($v->fails()){
            return response()->json([
                'status'=>400,
                'meta'=>'fail',
                'data'=>$v->errors()
            ]);
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        $token = $user->createToken('user')->accessToken;
        return response()->json([
            'status'    =>200,
            'meta'      =>'success',
            'flage'     => 1,
            'token'     =>$token,
            'data'      =>$user
        ]);


    }

    public function login(Request $request)
    {
        $v = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if($v->fails()){
            return response()->json([
                'status'=>400,
                'meta'=>'fail',
                'data'=>$v->errors()
            ]);
        }

        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)){
            return response()->json([
                'status'=>401,
                'meta' => 'Unauthorized'
            ]);
        }
        $user = Auth::user();
        $token = $user->createToken('Saleperson')->accessToken;
        return response()->json([
            'status'    =>200,
            'meta'      =>'success',
            'flag'      => 1,
            'token'     =>$token,
            'data'      =>$user
        ]);
    }

    public function logout(Request $request)
    {
        if($request->user()){
        $request->user()->token()->revoke();
        return response()->json([
            'status' => 200,
            'meta' => 'Successfully logged out'
        ]);
        }else{
            return response()->json([
                'status' => 205,
                'meta' => 'You are not login yet'
            ]);
        }
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

}
