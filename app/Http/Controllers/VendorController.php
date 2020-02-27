<?php

namespace App\Http\Controllers;

use App\Client;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $vendors =Vendor::get();
        return view('vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create',compact('vendors'));
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

        $vendors = new Vendor();
        $vendors->name = $request->name;
        $vendors->gstn = $request->gstn;
        $vendors->address = $request->address;
        $vendors->save();

        return redirect(route('vendor'))->with('message','New Vendor Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendors=Vendor::find($id);
        return view('vendor.edit',compact('vendors'));
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
        $vendors  = Vendor::where('id',$id)->first();
        $this->validate($request,[
            'name'=> 'required',
            'gstn'=> 'required|max:15',
            'address' => 'required|max:30',
        ]);
        $vendors->name = $request->name;
        $vendors->gstn = $request->	gstn;
        $vendors->address = $request->address;
        $vendors->save();
        return redirect(route('vendor'))->with('message','Vendor Update Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendors= Vendor::find($id);
        $vendors->delete();
        return redirect(route('vendor'))->with('message','Vendor Deleted Successfully');
    }

    public function data($id)
    {
        $vendors = Vendor::get(array('id','name','gstn','address'));
        return Datatables::of($vendors);
    }
}

