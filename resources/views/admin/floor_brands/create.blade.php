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
                    <a style="margin:5px;" href="{{url('/admin/floor_brands/'.$floor->id.'/index')}}" class="btn
                    btn-success">Back</a>
                </div>
            </div>
            <!-- Page Button Group End -->

        </div>
        <!-- Page Headings End -->

        <!-- Add or Edit Product Start -->
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">
                <form action="{{url('/admin/floor_brands/'.$floor->id.'/store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <h4 class="title">Choose {{$floor->name}} brands</h4>

                    <div class="row">
                        <div class="adomx-checkbox-radio-group inline">
                            @foreach($brands as $brand)
                                <label class="adomx-checkbox">
                                    <input name="brand_id[]" value="{{$brand->id}}" type="checkbox"
                                        {{\App\Models\FloorBrand::where('floor_id', $floor->id)->where('brand_id',$brand->id)->first
                                               () ? 'disabled checked':''}}

                                    >
                                    <i class="icon"></i>
                                    {{$brand->name}}</label>
                            @endforeach
                        </div>
                    </div>
                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Save
                            </button>
                            <a href="{{url('/admin/floor_brands')}}" class="button button-outline button-danger mb-10
                            ml-10
                            mr-0">Cancel</a>
                        </div>
                    </div><!-- Button Group End -->

                </form>
            </div>

        </div>
        <!-- Add or Edit Product End -->


    </div>
    <!-- Content Body End -->
@stop


@push('scripts')
    <!-- Plugins & Activation JS For Only This Page -->
    <script src="{{asset('assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/summernote/summernote.active.js')}}"></script>
@endpush

