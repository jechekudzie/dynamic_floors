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
                    <h3>{{$floor->name}} brands</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/floor_brands/'.$floor->id.'/create')}}" class="btn
                    btn-success">Add
                        new</a>
                    <a style="margin:5px;" href="{{url('/admin/floors/')}}" class="btn btn-success">Back</a>
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
                            <th>Brand Name</th>
                            <th>Specification image</th>
                            <th>Products</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($floor->floor_brands as $floor_brand)
                            <tr>

                                <td><a href="#">{{$floor_brand->brand->name}}</a></td>
                                <td><img style="width: 200px;" src="{{asset($floor_brand->specification_image)}}"></td>
                                <td>
                                    <a href="{{url('/admin/products/'.$floor_brand->id.'/index')}}">Products
                                        ({{$floor_brand->products->count()}})</a>

                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{url
                                        ('/admin/floor_brands/'.$floor_brand->id.'/edit')}}"><i
                                                class="zmdi zmdi-edit"></i></a>
                                        <form action="{{ url('/admin/brands/'.$floor_brand->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger zmdi zmdi-delete" title="Delete"></button>
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

