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
                    <h3>Floors</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/floors/create')}}" class="btn btn-success">Add new</a>
                    <a style="margin:5px;" href="{{url('/admin/floors/create')}}" class="btn btn-success">Back</a>
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
                            <th>Floor Name</th>
                            <th>Guidelines</th>
                            <th>Floor brands</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($floors as $floor)
                            <tr>
                                <td>#MSP40022</td>
                                <td><img width="100" src="{{asset($floor->image)}}" alt=""
                                         class="product-image"></td>
                                <td><a href="#">{{$floor->name}}</a></td>
                                <td><a href="#">Floor Guidelines</a></td>
                                <td>
                                    <a href="{{url('/admin/floor_brands/'.$floor->id.'/index')}}">Floor Brands
                                        ({{$floor->floor_brands->count()}})
                                    </a>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{url
                                        ('/admin/floors/'.$floor->id.'/edit')}}"><i
                                                class="zmdi zmdi-edit"></i></a>
                                        <form action="{{ url('/admin/floors/'.$floor->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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

