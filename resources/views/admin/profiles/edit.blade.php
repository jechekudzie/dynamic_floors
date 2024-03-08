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
                    <a style="margin:5px;" href="{{url('/admin/profiles')}}" class="btn btn-success">Back</a>
                </div>
            </div>
            <!-- Page Button Group End -->

        </div>
        <!-- Page Headings End -->

        <!-- Add or Edit Product Start -->
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">
                <form action="{{url('/admin/profiles/'.$profile->id)}}" method="post"
                      enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <h4 class="title">Edit {{$profile->name}}</h4>

                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30">
                            <select name="profile_type_id" class="form-control select2">
                                <option value="choose">Choose Profile</option>
                                @foreach($profile_types as $profile_type)
                                    <option value="{{$profile_type->id}}"
                                    @if($profile_type->id == $profile->profile_type_id)
                                        {{'selected'}}
                                        @endif
                                    >{{$profile_type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 mb-30">
                            <select name="material_id" class="form-control select2">
                                <option value="choose">Choose Material</option>
                                @foreach($materials as $material)
                                    <option value="{{$material->id}}"
                                    @if($material->id == $profile->material_id)
                                        {{'selected'}}
                                        @endif
                                    >{{$material->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 mb-30">
                            <select name="color_id" class="form-control select2">
                                <option value="choose">Choose Color</option>
                                @foreach($colors as $color)
                                    <option value="{{$color->id}}"
                                    @if($color->id == $profile->color_id)
                                        {{'selected'}}
                                        @endif
                                    >{{$color->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 mb-30">
                            <select name="supplier_id" class="form-control select2">
                                <option value="choose">Choose Supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}"
                                    @if($supplier->id == $profile->supplier_id)
                                        {{'selected'}}
                                        @endif
                                    >{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <h4 class="current">Current cover image </h4>
                    <img style="width: 100px;" class="img-100" src="{{asset($profile->image)}}">
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
                            <a href="{{url('/admin/profiles')}}" class="button button-outline button-danger mb-10
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

