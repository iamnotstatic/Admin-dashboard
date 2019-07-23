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
        $id = findOrFail($id);

        return view('admin.register-edit')->with('id', $id);
    }
}
