{{--
/**
 * Created By Akshay on 6/12/2019 2019 12:58 PM
 * afw create.blade.php
 **/--}}
@extends('layouts.layouts')
@section('content')
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Vendors</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Vendors</li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Company Details</h3>
                </div>

                <div class="block-content">
                    <!-- Full Table -->
                    <form class="mb-5" action="{{route('vendor.store')}}" method="Post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="example-ltf-email">Company Name</label>
                                <input type="text" class="form-control" id="example-ltf-email" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="example-ltf-password">GSTIN</label>
                                <input type="text" class="form-control" id="example-ltf-password" name="gstn" placeholder="GST No">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="example-ltf-email">Company Address</label>
                                <input type="text" class="form-control"  name="address" placeholder="Address">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="example-flatpickr-custom">Date</label>
                                <input type="text" class="js-flatpickr form-control bg-white js-flatpickr-enabled flatpickr-input" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @if(isset($errors))
                        @foreach ($errors->all() as $error)
                            <li style="color: darkred">{{ $error }}</li>
                    @endforeach
                @endif
                    <!-- END Full Table -->

                    <!-- Partial Table -->

                    <!-- END Partial Table -->
                </div>
            </div>

        </div>
    </main>

@endsection
@section('footer_script')
<script src="{{asset('/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('/js/plugins/dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js')}}"></script>
<script src="{{asset('/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
<script>jQuery(function(){ Dashmix.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'rangeslider', 'masked-inputs']); });</script>
@stop
