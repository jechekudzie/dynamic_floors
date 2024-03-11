@extends('layouts.site')

@section('content')

    <div id="content" class="site-content">
        <div class="p-0">
            <div class="grid-lines grid-lines-horizontal z-index-1">
                <span class="g-line-horizontal line-bottom color-line-secondary"></span>
            </div>
            <div class="grid-lines grid-lines-vertical z-index-1">
                <span class="g-line-vertical line-left color-line-secondary"></span>
                <span class="g-line-vertical line-right color-line-secondary"></span>
            </div>

            <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
                 data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_one" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-70" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="{{asset('banners/IMG_0038.JPG')}}"
                            data-rotate="0"
                            data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('banners/IMG_0038.JPG')}}" data-bgcolor='rgba(255,255,255,0)'
                                 style='' alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg"
                                 data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina>

                            <!-- LAYER 1  right image overlay dark-->

                            <!-- LAYER 4  Bold Title-->
                            <div class="tp-caption tp-resizeme tp-caption-main"
                                 id="slide-70-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']"
                                 data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                                 data-fontsize="['93','72','55','40']"
                                 data-lineheight="['83','70','51','55']"
                                 data-color="['#fff','#fff','#fff','#fff']"
                                 data-fontweight="['200','200','200','200']"
                                 data-whitespace="nowrap"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                 data-textAlign="['left','left','left','left']"

                                 style="color: #c1613f;">Explore The Possibilities
                            </div>

                            <!-- LAYER 5  Paragraph-->
                            <div class="tp-caption tp-resizeme tp-desc"
                                 id="slide-70-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['center','center','center','center']" data-voffset="['54','43','31','15']"
                                 data-fontsize="['19','18','17','16']"
                                 data-lineheight="['33','27','28','24']"
                                 data-width="['818','630','500','417']"
                                 data-weight="['500','500','500','500']"
                                 data-color="['#fff','#fff','#fff','#fff']"
                                 data-whitespace="normal"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                 data-textAlign="['center','center','center','center']"

                            >{{--We pride ourselves on being builders — creating architectural and creative solutions to
                                help people realize their vision and make them a reality. Wanna work with us?--}}
                            </div>

                            <!--  Read More-->
                            <div class="tp-caption rev-btn"
                                 id="slide-70-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                                 data-fontsize="['13','18','17','0']"
                                 data-lineheight="['25','18','16','16']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                            ><a href="{{url('/about')}}" class="octf-btn octf-btn-primary btn-slider btn-large">Read
                                    More
                                </a>
                            </div>

                        </li>


                        <!-- SLIDE 1 -->
                        <li data-index="rs-71" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="{{asset('banners/IIMG_0037.JPG')}}" data-rotate="0"
                            data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('banners/IMG_0037.JPG')}}" data-bgcolor='#ffffff' style='' alt=""
                                 data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                 class="rev-slidebg" data-bgparallax="off" data-no-retina>


                            <!-- LAYER 3  Thin text title-->
                            <div class="tp-caption tp-resizeme tp-caption-big"
                                 id="slide-71-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']"
                                 data-y="['center','center','center','center']" data-voffset="['-64','-72','-65','-50']"
                                 data-fontsize="['206',150','0','0']"
                                 data-lineheight="['206','170','127','80']"
                                 data-letterspacing="['104','85','63','39']"
                                 data-fontweight="['900','900','900','900']"
                                 data-color="['transparent','transparent','transparent','transparent']"
                                 data-whitespace="nowrap"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                 data-textAlign="['center','center','center','center']"

                            >
                            </div>

                            <!-- LAYER 4  Bold Title-->
                            <div class="tp-caption tp-resizeme tp-caption-main"
                                 id="slide-71-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']"
                                 data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                                 data-fontsize="['93','72','55','40']"
                                 data-lineheight="['83','70','51','55']"
                                 data-color="['#000000','#000000','#000000','#000000']"
                                 data-fontweight="['200','200','200','200']"
                                 data-whitespace="nowrap"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                 data-textAlign="['left','left','left','left']"

                                 >
                                Explore The Possibilities
                            </div>

                            <!-- Read More-->
                            <div class="tp-caption rev-btn"
                                 id="slide-71-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                                 data-fontsize="['13','18','17','0']"
                                 data-lineheight="['25','18','16','16']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                            ><a href="{{url('/about')}}" class="octf-btn octf-btn-primary btn-slider
                            btn-large">Read More</a>
                            </div>
                        </li>


                    </ul>
                    <div class="tp-bannertimer"></div>

                </div>
            </div>
            <div style="background-color: #58181a;" class="banner-desc-1">
                <ul>
                    <li><a href="#"><span>pinterest</span></a></li>
                    <li><a href="#"><span>twitter</span></a></li>
                    <li><a href="#"><span>facebook</span></a></li>
                    <li><a href="#"><span>instagram</span></a></li>
                </ul>
            </div>
        </div>

        <section class="about-1">
            <div class="grid-lines grid-lines-vertical">
                <span class="g-line-vertical line-left color-line-default"></span>
                <span class="g-line-vertical line-center color-line-default"></span>
                <span class="g-line-vertical line-right color-line-default"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                        <div class="about-img-1">
                            <img src="{{asset('images/aboutimage.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <div class="about-content-1 ml-xl-70">
                            <div class="ot-heading is-dots">
                                <span>About Company</span>
                                <h2 class="main-heading">Explore The Possibilities</h2>
                            </div>
                            <p>
                                We are the leading supplier of total wooden flooring solutions in Zimbabwe. We have been
                                supplying and installing a diverse range of durable Laminates, Vinyl, Engineered Wood
                                flooring as well as Composite plus Wooden Decking for commercial and domestic use since
                                2018. We also supply a variety of related products, which include skirting, flooring
                                accessories, silicones, adhesives and floor cleaning materials thereby ensuring our
                                customers enjoy one stop convenience.
                            </p>
                            <p>
                                The warm, natural feel and the non-allergenic
                                properties of our Flooring make it friendly for daily family use including children, the
                                elderly and pets.
                                Similarly, the timeless look, durability and ease of maintenance also make our floors
                                ideal for office, hotel/lodge, medical rooms and other commercial applications.
                            </p>
                            <p>
                                We pride ourselves on supplying quality products that are manufactured to the highest
                                European
                                standards and all our products have manufacturers warranty’s which range from 5 to 30
                                years. We have the best installation team in the country and have a long list of
                                delighted customers who will attest that our workmanship is indeed best in class.

                            </p>
                            {{--<div class="btn btn-danger">
                                <a href="{{url('/about')}}" class="octf-btn octf-btn-dark">View Projects</a>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background: #f7f7f7;" class="services-benefits">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="benefits-content">
                            <div class="row mb-md-70">
                                <div class="col-md-6 col-sm-12">
                                    <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                        <div class="content-box">
                                            <h3><a href="#" class="title-link">Our Company Values</a></h3>
                                            <h5 style="color: #c1613f">Excellence</h5>
                                            <p>We are dedicated to consistently giving our customers excellent product
                                                quality and exceptional services.</p>
                                            <h5 style="color: #c1613f">Relationships</h5>
                                            <p>We believe in building long term relationships with our customers, staff,
                                                suppliers and stakeholders.</p>
                                            <h5 style="color: #c1613f">Integrity</h5>
                                            <p>We take pride in fair play and being a responsible corporate citizen.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                        <div class="content-box">
                                            <h3><a href="#" class="title-link">Vision and Mission</a></h3>
                                            <h5 style="color: #c1613f">Vision</h5>
                                            <p>To be the preferred provider of Total Flooring Solutions in Zimbabwe and beyond.</p>
                                            <h5 style="color: #c1613f">Mission</h5>
                                            <p>To offer the best selection of nature inspired innovative flooring solutions to our customers..</p>
                                            <h5 style="color: #c1613f">Our Ethos</h5>
                                            <p>
                                                Everyone should be given the opportunity to explore the possibilities to beautify work and
                                                living spaces through the use of trending nature inspired flooring solutions which are both health and environmentally friendly.

                                            </p>
                                            <h5 style="color: #c1613f">Our Commitment</h5>
                                            <p>
                                                We have friendly, professional and experienced staff who are committed to helping you
                                                transform your space.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <span>[ Dynamic Floors ]</span>
                            <h2 class="main-heading">OUR POPULAR FLOORS</h2>
                        </div>
                        <div class="space-50"></div>
                    </div>
                    @foreach($floors as $floor)
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
        </div>

        <section style="background-color: #58181a;" class="space-medium ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                        <div style="background-color: #c1613f;" class="icon-box icon-box--bg-color icon-box--icon-left">
                            <div class="content-box">
                                @foreach(\App\Models\ProfileType::where('id',6)->get() as $profile_type)
                                    <a href="{{url('/skirting/'.$profile_type->id) }}"><h5>Skirting</h5></a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                        <div style="background-color: #c1613f;" class="icon-box icon-box--bg-color icon-box--icon-left">
                            <div class="content-box">
                                <a href="{{url('/profiles')}}"><h5>Profiles</h5></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div style="background-color: #c1613f;" class="icon-box icon-box--bg-color icon-box--icon-left">
                            <div class="content-box">
                                <a href="{{url('/cleaners/1')}}"><h5>Cleaners</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection
