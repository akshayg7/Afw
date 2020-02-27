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
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Clients</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Clients</li>
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
                    <form class="mb-5" action="{{route('client.store')}}" method="Post">
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
    @include('layouts.footer')
    @include('layouts.foot')
@endsection
