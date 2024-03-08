@extends('layouts.site')

@section('content')


    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-portfolio1">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Cleaners</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">cleaners</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="services-benefits">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="benefits-content">
                        <div class="row mb-md-70">
                            <div class="col-md-6 col-sm-6">

                                <div class="col-md-12 col-sm-12">
                                    <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                        <div class="content-box">
                                            <h5><a href="#" class="title-link">Daily Floor Cleaner – 750ml Nozzle
                                                    Spray</a>
                                            </h5>
                                            <p>
                                                All purpose floor cleaner which is environmentally friendly and harmless
                                                to skin.

                                                Eco friendly cleaner for regular cleaning of all floor surfaces
                                                including tiles, wood and laminated floors.

                                                Removes dirt and light soiling.
                                            </p>
                                            <h6>Instruction for use</h6>
                                            <ul>
                                                <li>Sweep the surface.</li>
                                                <li>Spray the cleaner directly onto a damp micro fibre mop and wipe the
                                                    floor.
                                                </li>
                                                <li>Mop should be damp only and not wet during the cleaning process.
                                                </li>
                                                <li>Rinse the mop head with clean water during and after use.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                        <div class="content-box">
                                            <h5><a href="#" class="title-link">Concentrated all purpose floor cleaner –
                                                    2l</a>
                                            </h5>
                                            <p>
                                                All purpose floor cleaner which is environmentally friendly and harmless
                                                to skin.

                                                Eco friendly cleaner for regular cleaning of all floor surfaces
                                                including tiles, wood and laminated floors.

                                                Removes dirt and light soiling.
                                            </p>
                                            <h6>Instruction for use</h6>
                                            <ul>
                                                <li> Dilute with water for SPRAY BOTTLE AND FLAT MOP HEAD use.</li>
                                                <li>(1 part cleaner to 5 parts water). Sweep the surface.</li>
                                                <li>Spray the cleaner directly onto a damp micro fibre mop and wipe the
                                                    floor.
                                                </li>
                                                <li> Rinse the mop head with clean water during and after use.</li>
                                                <li> Mop should be damp only and not wet</li>
                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                        <div class="content-box">
                                            <h5><a href="#" class="title-link">Miracle Microfibre Mop</a></h5>
                                            <p>Suitable for all types of smooth surfaces</p>
                                            <h6>Instruction for use</h6>
                                            <ul>
                                                <li>Use either damp or dry</li>
                                                <li>If using damp then use with TFC Laminate Cleaner or TFC Quick Clean
                                                    for the best results
                                                </li>
                                                <li>If using on Laminates then ensure you wring out all excess water
                                                    from the mop
                                                </li>
                                                <li>360 degree rotating head</li>
                                                <li>Telescopic handle</li>
                                                <li>Head can be rotated flat for easy access under furniture</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    @foreach($images as $image)
                                        <div class="col-md-6 col-lg-6">
                                            <a href="#">
                                                <img style="width: 500px; height: 300px;" src="{{asset($image->image)}}"
                                                     alt="">
                                            </a>
                                            <div class="">
                                                <h5 style="text-align: center;">{{$image->name}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{$images->links('pagination::bootstrap-4')}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
