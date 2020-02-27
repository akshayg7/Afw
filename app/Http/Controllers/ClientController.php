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
        $clients =Client ::get();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'gstn'=> 'required|max:15',
            'address' => 'required|max:30',
        ]);

        $clients = new Client();
        $clients->name = $request->name;
        $clients->gstn = $request->gstn;
        $clients->address = $request->address;
        $clients->save();

        return redirect(route('client'))->with('message','New client Added Successfully');
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
        $clients=Client::find($id);
        return view('client.edit',compact('clients'));
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
        $clients  = Client::where('id',$id)->first();
        $clients->name = $request->name;
        $clients->gstn = $request->	gstn;
        $clients->address = $request->address;
        $clients->save();
        return redirect(route('client'))->with('message','Client Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients= Client::find($id);
        $clients->delete();
        return redirect(route('client'))->with('message','Client Deleted Successfully');
    }
    public function data($id)
    {
        $clients = Client::get(array('id','name','gstn','address'));

        return Datatables::of($clients);

    }

}
