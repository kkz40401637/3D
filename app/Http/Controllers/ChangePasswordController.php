<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'string', 'min:8'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(Auth()->user()->hasRole('superadmin')->id)->update(['password'=> Hash::make($request->new_password)]);
        return back()->with('success','Password change successfully.');
    }
}
