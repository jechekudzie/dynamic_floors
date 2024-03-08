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
                    <h3>@if($floorBrand->brand){{$floorBrand->brand->name}}@endif Product</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/products/'.$floorBrand->id.'/index')}}" class="btn
                    btn-success">Back</a>
                </div>
            </div>
            <!-- Page Button Group End -->

        </div>
        <!-- Page Headings End -->

        <!-- Add or Edit Product Start -->
        <div class="add-edit-product-wrap col-12">
            @if($errors->any())
                @include('errors')
            @endif
                @if (session('message'))
                    <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                        <strong>Message
                            ! </strong> {{session('message')}}
                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                @endif
            <div class="add-edit-product-form">
                <form action="{{url('/admin/products/'.$floorBrand->id.'/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="title">@if($floorBrand->brand){{$floorBrand->brand->name}}@endif Product</h4>

                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="name" value="{{old('name') }}"

                                                                  type="text"
                                                                  placeholder="Product Name / Title*"></div>
                    </div>

                    <h4 class="title">Product Image</h4>

                    <div class="product-upload-gallery row flex-wrap">
                        <div class="col-12 mb-30">
                            <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                            <input class="file-pond" type="file" name="image" multiple>
                        </div>
                    </div>

                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Save
                            </button>
                            <button class="button button-outline button-danger mb-10 ml-10 mr-0">Delete Product</button>
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

