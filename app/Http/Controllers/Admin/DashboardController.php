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
        if ($request->has('name')) {
            $user->name = $request->input('username');
        }

        if ($request->has('usertype')) {
            if ($user->id === auth()->id()) {
                return redirect()->back()->with('error', 'You cannot update your own role.');
            }

            $user->usertype = $request->input('usertype');
        }

        $user->update();

        return redirect('/users')->with('status', 'You have successfully update data');
    }


    public function registereddestroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();

        return redirect('/users')->with('status', 'User deleted successfully');
    }
}
