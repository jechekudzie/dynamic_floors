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
                    <h3>Profiles</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/profiles/create')}}" class="btn btn-success">Add
                        new</a>
                    <a style="margin:5px;" href="{{url('/admin/profiles/create')}}" class="btn btn-success">Back</a>
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
                            <th>Photo</th>
                            <th>Profile Type</th>
                            <th>Material</th>
                            <th>Supplier </th>
                            <th>Color </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($profiles as $profile)
                            <tr>

                                <td><img width="100" src='{{asset($profile->image)}}' alt=""
                                         class="product-image"></td>
                                <td><a href="#">@if($profile->profile_type)
                                            {{$profile->profile_type->name}}@endif</a></td>
                                <td><a href="#">@if($profile->material){{$profile->material->name}}@endif</a></td>
                                <td><a href="#">@if($profile->supplier){{$profile->supplier->name}}@endif</a></td>
                                <td><a href="#">@if($profile->color){{$profile->color->name}}@endif</a></td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{url
                                        ('/admin/profiles/'.$profile->id.'/edit')}}"><i
                                                class="zmdi zmdi-edit"></i></a>
                                        <a class="delete button button-box button-xs button-danger" href="#"><i
                                                class="zmdi zmdi-delete"></i></a>
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

