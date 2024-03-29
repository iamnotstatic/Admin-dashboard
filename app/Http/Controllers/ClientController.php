<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();    // get all clients
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|string|email',
            'product_purchased' => 'required|string',
            'cost_price' => 'required|string',
            'actual_price' => 'required|string',
            'profit' => 'required|string',
            'status' => 'required|string',
        ]);

        // create client
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->product_purchased = $request->product_purchased;
        $client->cost_price = $request->cost_price;
        $client->actual_price = $request->actual_price;
        $client->profit = $request->profit;
        $client->status = $request->status;
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client created successfully');
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
        $client = Client::findOrFail($id);;
        return view('admin.clients.edit', compact('client'));
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

        $this->validate($request, [
            'email' => 'required|email',
        ]);
        
        // update records
        $client = Client::findOrFail($id);

        if ($request->has('name')) {
            $client->name = $request->name;
        }

        if ($request->has('email')) {
            $client->email = $request->email;
        }

        if ($request->has('phone')) {
            $client->phone = $request->phone;
        }


        if ($request->has('product_purchased')) {
            $client->product_purchased = $request->product_purchased;
        }

        if ($request->has('cost_price')) {
            $client->cost_price = $request->cost_price;
        }

        if ($request->has('actual_price')) {
            $client->actual_price = $request->actual_price;
        }

        if ($request->has('profit')) {
            $client->profit = $request->profit;
        }

        if ($request->has('status')) {
            $client->status = $request->status;
        }

        if (!$client->isDirty()) {
            return redirect()->route('clients.edit', $client->id)->with('error', 'You need to specify a different value to update');
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
    }
}
