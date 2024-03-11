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
                    <h3>Wall Decor</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/wall_decor/create')}}" class="btn btn-success">Add new</a>
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
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Wall Decor Type</th>
                            <th>Options</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($wallDecors as $wallDecor)
                            <tr>
                                <td>#{{$loop->iteration}}</td>
                                <td><img width="100" src="{{asset($wallDecor->image)}}" alt=""
                                         class="product-image"></td>
                                <td><a href="#">{{$wallDecor->type}}</a></td>

                                <td>
                                    <a href="{{url('/admin/wall_decor_options/'.$wallDecor->id.'/index')}}">wall Decor Options
                                        ({{$wallDecor->options->count()}})
                                    </a>
                                </td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="{{url('/admin/wall_decor/'.$wallDecor->id.'/edit')}}"><i
                                                class="zmdi zmdi-edit"></i></a>
                                        <form action="{{ url('/admin/wall_decor/'.$wallDecor->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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

