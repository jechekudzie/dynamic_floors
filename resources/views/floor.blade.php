@extends('layouts.site')

@section('content')


    <div id="content" class="site-content">
        <div style="background-image: url('{{asset($floor->image)}}')" class="page-header dtable text-center
        header-transparent
        page-header-contact">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">{{$floor->name}}</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Flooring</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="services-single">
        <div class="container">
            <div class="row">
                <div class="widget-area col-lg-3 col-md-12">
                    <div class="widget widget_nav_menu">
                        <ul class="services-menu">
                            @if($floor->floor_brands)
                                @foreach($floor->floor_brands as $floor_brand)
                                    <li>
                                        <a href="{{url('/floor_brands/'.$floor_brand->id)}}">{{$floor_brand->brand->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="services-detail-content">
                        <div class="ot-heading ">
                            <span>[ Flooring ]</span>
                            <h2 class="main-heading">{{$floor->name}}</h2>
                        </div>
                        <p>
                            {!! $floor->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div style="text-align: center" class="ot-heading ">
            <span>[ Related ]</span>
            <h2 class="main-heading">SEE OTHER FLOORS</h2>
        </div>
        <div class="row">
            @foreach(\App\Models\Floor::all() as $floor)
                <div class="col-lg-4 col-md-6 px-0">
                    <div class="cate-lines h-light">
                        <div class="cate-item">
                            <a href="{{url('/floor/'.$floor->id)}}">
                                <img src="{{asset($floor->image)}}" alt="">
                            </a>
                            <div class="cate-item_content">
                                <a href="{{url('/floor/'.$floor->id)}}"><h2>{{$floor->name}}<span
                                            class="number-stroke"></span></h2></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@stop
