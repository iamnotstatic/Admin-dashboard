<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::all();    // get all clients
        return view('admin.clients.index', compact('clients'));
    }

    public function registered()
    {

        $users = User::all();
        return view('admin.register')->with('users', $users);
    }


    public function registerededit(Request $request, $id)
    {

        $user = User::findOrFail($id);
        return view('admin.register-edit')->with('user', $user);
    }


    public function registeredupdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('username');
        $user->usertype = $request->input('usertype');
        $user->update();

        return redirect('/role-register')->with('status', 'You have successfully update data');
    }


    public function registereddestroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();

        return redirect('/role-register')->with('status', 'User deleted successfully');
    }
}
