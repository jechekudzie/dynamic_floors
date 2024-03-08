@extends('layouts.site')

@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-portfolio1">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Accessories</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Skirting</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container">
            <div class="col-lg-12 col-md-12 text-center">
                <h1>{{'SKIRTING'}}</h1>
            </div>
                <div class="row">
                    @foreach($skirtings as $skirting)
                        <div class="col-md-4 col-lg-4">
                            <a href="#">
                                <img style="width: 500px; height: 300px;" src="{{asset($skirting->image)}}" alt="">
                            </a>
                            <div class="">
                                <h5 style="text-align: center;">{{$skirting->color->name}}</h5>
                                <p style="text-align: center;"><a href="#">@if($skirting->material){{$skirting->material->name}}@endif</a></p>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

@stop
