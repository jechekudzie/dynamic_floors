@extends('layouts.site')

@section('content')
    @livewireStyles
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-portfolio1">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Profiles</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">profiles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- section coloumn blog -->
    @livewire('profiles')
    <!-- section coloumn blog end -->
    @livewireScripts
@stop
