<?php

namespace App\Http\Controllers;

use App\Client;
use App\Invoice;
use App\invoicepayment;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('billing.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $invoicePay = new invoicepayment();
         $invoicePay->party_details = $request->partydetail;
         $invoicePay->party_name = $request->search;
         $invoicePay->note = $request->notes;
         $invoicePay->total = $request->subTotal;
         $invoicePay->cgst = $request->taxRate;
         $invoicePay->sgst = $request->taxRate1;
         $invoicePay->tax_amount = $request->taxAmount;
         $invoicePay->totalafter_tax = $request->totalAftertax;
         $invoicePay->advance = $request->amountPaid;
         $invoicePay->amount_due = $request->amountDue;
         $invoicePay->save();

         for ($i = 0; $i < count($request->get('productCode')); $i++) {
             $v = new Invoice();
             $v->invoicepay_id = $invoicePay->id;
             $v->item_no = $request->get('productCode')[$i];
             $v->discription = $request->get('productName')[$i];
             $v->unit = $request->get('unit')[$i];
             $v->quantity = $request->get('quantity')[$i];
             $v->rate = $request->get('price')[$i];
             $v->amount = $request->get('total')[$i];
             $v->save();
         }
         $id=$invoicePay->id;
        return redirect()->route('billing.view',compact('id'))->with('message','New Invoice Added Successfully');

    }

    public function show($id)
    {
        return view('billing.invoice');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function view(Request $request )
    {
        $bill=invoicepayment::find($request->id);
        $billparticulars=Invoice::where('invoicepay_id',$bill->id)->get(array('id','date','item_no','discription','quantity','rate','amount'));
        return view('billing.invoice',compact('bill','billparticulars'));
    }
    public function search(Request  $request)
    {
        $search = $request->get('term');

        $result = Client::where('name', 'LIKE', '%'. $search. '%')->get();

        return response()->json($result);
    }

}
