@extends('layouts.layouts')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light d-print-none">
        <div class="content content-full">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">

                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Invoice</h1>
                <button type="button" class="btn btn-hero-success my-2">
                    <i class="fa fa-fw fa-plus mr-1"></i> New Invoice
                </button>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block ">
            <div class="block-header block-header-default" style="background-image:url(http://localhost/afw/public/media/photos/bar.png);height: 164px;">
                <h3 class="block-title"></h3>
                <div class="block-options">
                    <!-- Print Page functionality is initialized in Helpers.print() -->
                    <button type="button" class="btn-block-option" onclick="Dashmix.helpers('print');">
                        <i class="si si-printer mr-1"></i> Print Invoice
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <!-- Invoice Info -->
                    <div class="row mb-5">
                        <!-- Company Info -->
                        <div class="col-6">
                            <p class="h3">To,</p>
                            <p>{{$bill->party_name}}</p>
                            <address>
                                {{$bill->party_details}}
                            </address>
                            <p class="h5 mb-1">GST No:-27AMLPG3366P1ZG</p>
                        </div>
                        <!-- END Company Info -->

                        <!-- Client Info -->
                        <div class="col-6 text-right">
                            <p class="h5">Invoice No.{{$bill->id}}</p>

                        </div>
                        <!-- END Client Info -->
                    </div>
                    <!-- END Invoice Info -->

                    <!-- Table -->
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead class="bg-body">
                                <tr>
                                    <th class="text-center" style="width: 60px;">Sr.No</th>
                                    <th>Discription</th>
                                    <th class="text-center" style="width: 70px;">Qty</th>
                                    <th class="text-center" style="width: 70px;">Unit</th>
                                    <th class="text-center" style="width: 120px;">Rate</th>
                                    <th class="text-center" style="width: 120px;">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($billparticulars as $particular)
                                <tr>
                                    <td class="text-center">{{$particular->item_no}}</td>
                                    <td>
                                        <p class="font-w600 mb-1">{{$particular->discription}}</p>
{{--                                        <div class="text-muted">Providing and making ladders using M.S 1" x 1" Pipe APL Apollo make and painting it in Black color oil paint--}}
{{--                                            Size:12' x 2'--}}
{{--                                        </div>--}}
                                    </td>
                                    <td class="text-center">
                                        <span>{{$particular->quantity}}</span>
                                    </td>
                                    <td class="text-right">NO.</td>
                                    <td class="text-right">{{$particular->rate}}</td>
                                    <td class="text-right">{{$particular->amount}}</td>
                                </tr>
                            @endforeach

                                <tr>
                                    <td colspan="5" class="font-w600 text-right">Subtotal</td>
                                    <td class="text-right">₹{{$bill->total}}</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="font-w600 text-right">CGST (9%)</td>
                                    <td class="text-right">₹{{$bill->tax_amount}}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="font-w600 text-right">SGST (9%)</td>
                                    <td class="text-right">₹{{$bill->tax_amount}}</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="font-w700 text-uppercase text-right bg-body-light">Total</td>
                                    <td class="font-w700 text-right bg-body-light">₹{{$bill->totalafter_tax}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END Table -->

                    <!-- Footer -->
                    <p class="text-muted text-center my-5">
                        Thank you for doing business with us.
                    </p>
                    <!-- END Footer -->
                </div>
            </div>
        </div>
        <!-- END Invoice -->
    </div>
    <!-- END Page Content -->

</main>
@endsection
