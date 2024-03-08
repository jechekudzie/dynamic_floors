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
                    <h3>Portfolios</h3>
                </div>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-date-range">
                    <a style="margin:5px;" href="{{url('/admin/portfolios')}}" class="btn btn-success">Back</a>
                </div>
            </div>
            <!-- Page Button Group End -->

        </div>
        <!-- Page Headings End -->

        <!-- Add or Edit Product Start -->
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">
                <form action="{{url('/admin/portfolios/'.$portfolio->id)}}" method="post"
                      enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <h4 class="title">Edit {{$portfolio->title}}</h4>

                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30"><input name="title" value="{{$portfolio->title}}"
                                                                  class="form-control" type="text"
                                                                  placeholder="Floor name*"></div>
                        <div class="col-12 mb-30"><textarea name="description" class="summernote form-control"
                                                            placeholder="Product
                        Description*">{{$portfolio->description}}</textarea></div>

                    </div>
                    <h4 class="current">Current cover image </h4>
                    <img style="width: 100px;" class="img-100" src="{{asset($portfolio->image)}}">
                    <h4 class="title">Upload new Cover Image</h4>
                    <div class="product-upload-gallery row flex-wrap">
                        <div class="col-12 mb-30">
                            <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                            <input class="file-pond" name="image" type="file" multiple>
                        </div>
                    </div>
                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Save
                            </button>
                            <a href="{{url('/admin/portfolios')}}" class="button button-outline button-danger mb-10
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

