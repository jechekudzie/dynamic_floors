@extends('layouts.admin')
@push('head')

@endpush

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Accessories</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/accessories/create')}}" class="btn btn-success">Add
                        new</a>
                    <a style="margin:5px;" href="{{url('/admin/accessories/create')}}" class="btn btn-success">Back</a>
                </div>
            </div>
            <!-- Page Button Group End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Manage Product List Start-->
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table data-table data-table-default table-vertical-middle ">

                        <thead>
                        <tr>
                            <th>Accessory ID</th>
                            <th>Photo</th>
                            <th>Brand Name</th>
                            <th>Accessory Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($accessories as $accessory)
                            <tr>
                                <td>#MSP40022</td>
                                <td><img width="100" src="{{asset($accessory->image)}}" alt=""
                                         class="product-image"></td>
                                <td><a href="#">{{$accessory->brand->name}}</a></td>
                                <td><a href="#">{{$accessory->name}}</a></td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="view button button-box button-xs button-primary"
                                           href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>

                                        <form action="{{ route('admin.conflict-types.destroy', $conflictType->slug) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Manage Product List End-->

        </div>

    </div>
    <!-- Content Body End -->
@stop


@push('scripts')
    <!-- Plugins & Activation JS For Only This Page -->
    <script src="{{asset('assets/js/plugins/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/datatables.active.js')}}"></script>
@endpush

