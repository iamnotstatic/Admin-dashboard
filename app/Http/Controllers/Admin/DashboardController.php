<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function registered(){

        $users = User::all();
        return view('admin.register')->with('users', $users);
    }


    public function registerededit(Request $request, $id){
        
        $user = User:: findOrFail($id);
        return view('admin.register-edit')->with('user', $user);
    }


    public function registeredupdate(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('username');
        $user->usertype = $request->input('usertype');
        $user->update();

        return redirect('/role-register')->with('status', 'You have successfully update data');

    }
}
