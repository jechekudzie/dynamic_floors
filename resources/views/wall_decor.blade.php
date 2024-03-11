@extends('layouts.site')

@section('content')
    <style>
        .page-header {
            background-image: url('wallfloor.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-portfolio1">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title"></h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="#"></a></li>
                        <li class="active"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section style="margin-top: -40px; background-color: #c1613f" class="">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <h1 style="color: white;text-align: justify">WALL DECOR</h1>
            </div>
            <div class="row">
                <p style="color: white;font-size: 20px;text-align: justify">
                    Give your walls a flawless finish, we offer a comprehensive selection of products to ensure your
                    walls not only look great but also perform at their best. Explore our top-quality wall cladding
                    accessories today!
                </p>
            </div>

        </div>
    </section>

    <section style="margin-top: -65px;">
        <div class="container">
            @foreach($wallDecors as $wallDecor)
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 style="margin-top: -20px;">{{$wallDecor->type}}</h1>
                </div>
                <div class="row">
                    @if($wallDecor->options)
                        @foreach($wallDecor->options as $option)
                            <div style="" class="{{$wallDecor->options->count() >= 3 ? 'col-md-4' : 'col-md-6' }}">
                                <a href="#">
                                    <img style="/*width: 500px; height: 300px;*/" src="{{asset($option->image)}}" alt="">
                                </a>
                                <div class="">
                                    <h5 style="text-align: center; ">{{$option->title}}</h5>
                                </div>
                                <div class="">
                                    <p style="text-align: center;">
                                        @if($option->sizes != null)
                                            @foreach($option->sizes as $size)
                                                <span style="color: black;"
                                                      class="fa fa-badge">{{ $size }}</span>
                                                <br/>{{-- Display each size --}}
                                            @endforeach

                                        @endif
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="">
                        <h5 style="text-align: justify;font-size: 35px;">{!! $wallDecor->description !!}</h5>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

@stop
