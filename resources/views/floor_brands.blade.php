@extends('layouts.site')

@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-portfolio1">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">{{$floorBrand->floor->name}}</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="#">Home</a></li>
                        <li class="active">{{$floorBrand->brand->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container">
            <div class="col-lg-12 col-md-12 text-center">
                <h1>{{$floorBrand->brand->name}}</h1>
            </div>
            <div class="row">
                @foreach($floorBrand->products as $product)
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <img style="width: 500px; height: 300px;" src="{{asset($product->image)}}" alt="">
                        </a>
                        <div class="">
                            <h5 style="text-align: center;">{{$product->name}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3 px-md-0">
                <div id="w-gallery-column" class="w-gallery-container">
                    <a class="w-gallery architect furniture" href="{{asset($floorBrand->specification_image)}}">
                        <img style="width: 500px;" src="{{asset($floorBrand->specification_image)}}" alt=""
                             class="w-gallery-image">
                        <div class="content-gallery">
                            <span class="ti-plus"> {{$floorBrand->brand->name}}</span>
                        </div>
                    </a>
                </div>
            </div>
            <div style="color: black;!important;" class="col-md-6 mt-3 px-md-0">
                {!! $floorBrand->specifications !!}
            </div>
        </div>
        </div>
    </section>

@stop
