@extends('layouts.site')

@section('content')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        @media only screen and (min-width: 300px) and (max-width: 500px) {
            .swiper-container {
                /* Ensure the swiper container is not adding extra height */
                height: 300px;
            }

            .swiper-slide {
                /* Adjust the min-height or remove it entirely for mobile */
                min-height: 300px; /* Adjusted height for mobile */
                /* Other properties */
            }

            .swiper-slide img {
                /* Update or ensure these styles are suitable for mobile */
               width: 100%; /* Full width of the slider */
                height: 600px; /* Maintain aspect ratio */
                object-fit: contain; /* Cover the slide area, may crop the image */
                object-position: center;
                /* Other properties */
                margin-top: 100px;
                margin-bottom: -80px;
            }

            /* Adjust the position of the caption for mobile if necessary */
            .caption {
                /* Update or ensure these styles are suitable for mobile */
                /* Other properties */
            }

            /* Inspect elements above the swiper container for extra space */
            header, .site-header, .top-bar, .some-other-element {
                margin-bottom: 0; /* Eliminate any margin that may push the slider down */
                padding-top: 0; /* Eliminate any padding that may add space at the top */
            }
        }

        /* Styles for laptops and larger screens */

        /* Set the slides to fill the width and have a minimum height */
        /* Set the slides to fill the width and have a desired minimum height */
        .swiper-slide {
            width: 100%;
            min-height: 100%; /* Adjusted height: reduce as necessary */
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* The rest of your styles remain the same */


        /* Ensure images fill the width and maintain their aspect ratio without being cropped */
        .swiper-slide img {
            width: 100%; /* Fill the width */
           height: 1280px; /* Maintain aspect ratio */
            object-fit: cover; /* Cover the area of the slide; this can result in cropping if the aspect ratio is different */
            object-position: center; /* Center the image within the slide */
        }

        /* Center the caption over the image */
        .caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px; /* Optional: rounds the corners of the caption background */
        }

    </style>

    <div id="content" class="site-content">
        <div class="p-0">
            <div class="grid-lines grid-lines-horizontal z-index-1">
                <span class="g-line-horizontal line-bottom color-line-secondary"></span>
            </div>
            <div class="grid-lines grid-lines-vertical z-index-1">
                <span class="g-line-vertical line-left color-line-secondary"></span>
                <span class="g-line-vertical line-right color-line-secondary"></span>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img {{--style="margin-bottom: -100px"--}} class="img-fluid" src="{{asset('banners/b1.JPG')}}" alt="Image 1">
                       {{-- <div class="caption">--}}{{--Caption for Image 1--}}{{--</div>--}}
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('banners/IMG_0037.JPG')}}" alt="Image 2">
                      {{--  <div class="caption">--}}{{--Caption for Image 2--}}{{--</div>--}}
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('banners/IMG_0025.JPG')}}" alt="Image 2">
                      {{--  <div class="caption">--}}{{--Caption for Image 2--}}{{--</div>--}}
                    </div>
                    <!-- ... more slides with captions -->
                </div>
                <!-- ... pagination, navigation, scrollbar if needed -->
            </div>


            <div style="background-color: #58181a;padding-top: 10px;padding-bottom: 10px;" class="banner-desc-1">
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
    <script>
        var mySwiper = new Swiper ('.mySwiper', {
            // Optional parameters
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },

            // If you want navigation buttons
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // If you want pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // And if you need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>

@endsection
