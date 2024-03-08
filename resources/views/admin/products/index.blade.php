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
                    <h3>@if($floorBrand->brand){{$floorBrand->brand->name}}@endif Products</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/products/'.$floorBrand->id.'/create')}}" class="btn
                    btn-success">Add new </a>
                    <a style="margin:5px;" href="{{url('/admin/floor_brands/'.$floorBrand->floor_id.'/index')}}"
                       class="btn
                    btn-success">Back</a>
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
                            <th>Product ID</th>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>View Product</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($floorBrand->products)
                            @foreach($floorBrand->products as $product)
                                <tr>
                                    <td>#MSP40022</td>
                                    <td><img width="100" src="{{asset($product->image)}}" alt=""
                                             class="product-image"></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><a href="{{url('/admin/product/'.$product->id.'/show')}}">View Product</a></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary"
                                               href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="{{url
                                        ('/admin/products/'.$product->id.'/edit')}}"><i
                                                    class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i
                                                    class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
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

