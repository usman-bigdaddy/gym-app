<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
        return view("trainer.members")->with("members",User::all());
    }
    public function create()
    {
        return view("trainer.add_member");
    }
    public function member_change_password(Request $request)
    {
        //$this->middleware('auth:trainer');
        if ($request->isMethod('post')) {
            if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                // The passwords matches
                return back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            }
            
            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                //Current password and new password are same
                return back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            }
    
            $validatedData = $request->validate([
                'current-password' => 'required',
                'new-password' => 'required|string|min:4|confirmed',
            ]);    

            //Change Password
            $user = Auth::user();
            $user->password = Hash::make($request->get('new-password'));
            $user->save();
            return back()->with("success","Password changed successfully !");
        }
        else{
            return view('change-password')->with('breadcrumb_title', 'Change Password');
        }
    }
}
