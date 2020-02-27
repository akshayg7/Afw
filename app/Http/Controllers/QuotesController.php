<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('quotes.form');
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
         $quote = new Quotes();
         $quote->party_details = $request->partydetail;
         $quote->party_name = $request->search;
         $quote->note = $request->notes;
         $quote->total = $request->subTotal;
         $quote->cgst = $request->taxRate;
         $quote->sgst = $request->taxRate1;
         $quote->tax_amount = $request->taxAmount;
         $quote->totalafter_tax = $request->totalAftertax;
         $quote->advance = $request->amountPaid;
         $quote->amount_due = $request->amountDue;
         $quote->save();

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
         $id=$quote->id;
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
    
    public function result(Request  $request)
    {
        $result=\App\Client::where('name', 'LIKE', "%{$request->input('query')}%")
            ->take(10)->get(array('id','name','gstn','address'));
        dd($result);
        return $result;
    }

}
