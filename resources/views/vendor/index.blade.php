@extends('layouts.layouts')
@section('content')
    <style>
        .btn-hover {
            width: 182px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 12px;
            height: 47px;
            text-align: center;
            border: none;
            background-size: 150% 100%;
            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover:focus {
            outline: none;
        }

        .btn-hover.color-6 {
            background-image: linear-gradient(to right, #ed6ea0, #ec8c69, #f7186a , #FBB03B);
            box-shadow: 0 4px 15px 0 rgba(236, 116, 149, 0.75);
        }
    </style>
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Vendors</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Vendors</li>
                            <li class="breadcrumb-item active" aria-current="page">Vendors List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="block block-rounded block-bordered">
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row" style="padding-bottom: 10px">
                        <div class="col-sm-12 col-md-4">

                        </div>
                        <div class="col-sm-12 col-md-4">

                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div style="float: right">
                                <a href="{{url('/vendor/create')}}">
                                    <button type="button" class="btn btn-hero-success btn-hover color-6 mr-1 mb-3">
                                        <i class="fa fa-fw fa-plus mr-1"></i> Add vendor
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons" id="" >
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>GST no</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vendors as $vendor)
                                    <tr>
                                        <td class="font-w600">
                                            {{$vendor->id}}
                                        </td>
                                        <td class="font-w600">
                                            {{$vendor->name}}
                                        </td>
                                        <td class="font-w600">
                                            {{$vendor->gstn}}
                                        </td>
                                        <td class="font-w600">
                                            {{$vendor->address}}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('vendor.edit',$vendor->id)}}">
                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="btn-group">

                                                    <button  type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View">
                                                        <i class="fa fa-eye"></i>
                                                    </button>

                                            </div>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="{!! URL::route('vendor.destroy',[$vendor->id]) !!}" data-id="{{$vendor->id}}" data-target="#modal-block-popin">Delet Pop</button>
                                                    <button  type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <form action="" method="POST">
        <div class="modal fade" id="modal-block-popin" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popin" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Delete Vendor</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <p>Are you sure! Do you really want to delete this vendor ?</p>
                            </div>
                            <div class="block-content block-content-full text-right bg-light">
                                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </form>
    </main>
<script>


    (function() {

        ('#table').DataTable( {

            dom:'<"m-t-10 pull-right"f>rti<"m-t-10 pull-right"p><"m-t-10 pull-bottom"l>',

            processing: true,

            serverSide: true,

            ajax: '{!! route('vendor.data') !!}',

            order: [[0, 'asc']],

            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'gstn', name: 'gstn' },
                { data: 'address', name: 'address' },
                { data: 'actions', name: 'actions', orderable: true, searchable: true }
            ],
            responsive: true,
        });

    } );
</script>
    {{--Success alerts--}}
    @if(session()->has('success'))
        <script>
            toastr.success('User register successfully');
        </script>
    @endif
    @if(session()->has('deleteMessage'))
        <script>
            toastr.info('User deleted successfully');
        </script>
    @endif
    @if(session()->has('updateSuccess'))
        <script>
            toastr.success('User updated successfully');
        </script>
    @endif
    {{--Success alerts end--}}

    <!-- Page JS Plugins -->

@endsection
@section('footer_script')
    <script src="{{asset('/js/dashmix.core.min-2.0.js')}}"></script>
    <script src="{{asset('/js/dashmix.app.min-2.0.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('/js/pages/be_tables_datatables.min.js')}}"></script>
@stop
