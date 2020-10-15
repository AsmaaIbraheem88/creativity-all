@extends('front.index')

@section('title')
   Home
@endsection

@section('content')

    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Outstanding <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services. </h2>
                                <div class="slider-content-btn">
                                    <!--									<a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>-->
                                    <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}">{{trans('front.quote')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Outstanding <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services. </h2>
                                <div class="slider-content-btn">
                                    <!--									<a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>-->
                                    <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}"> {{trans('front.quote')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Outstanding <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services.</h2>
                                <div class="slider-content-btn">
                                    <!--									<a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>-->
                                    <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}">{{trans('front.quote')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="section wb" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_02.jpg" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h4></h4>
                        <h2>{{trans('front.Who We are')}}</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>


                        <h2>{{trans('front.features')}}</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet.
                            Pellentesque venenatis nibh sed tellus faucibus bibendum.
                            Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <!--                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>-->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->




    <div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>{{trans('front.our_services')}}</h3>
                <p class="lead">{{trans('front.service_desc')}}</p>
            </div><!-- end title -->

            <div class="owl-services owl-carousel owl-theme ">


                <div class="service-widget" >
                    <div class="post-media wow fadeIn">

                        <img src="uploads/service_01.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3><a class="show" data-scroll="features">Smart Swatch Editions</a></h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                        <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}" style="padding:7px; margin:10px auto;font-size: 15px">{{trans('front.quote')}}</a>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">

                        <img src="uploads/service_02.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3><a class="show" data-scroll="features">Smart Swatch Editions</a></h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                        <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}l" style="padding:7px; margin:10px auto;font-size: 15px">{{trans('front.quote')}}</a>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/service_03.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3><a class="show" data-scroll="features">Smart Swatch Editions</a></h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                        <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}" style="padding:7px; margin:10px auto;font-size: 15px">GET AQUOTE</a>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">

                        <img src="uploads/service_04.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3><a class="show" data-scroll="features">Smart Swatch Editions</a></h3>
                        <p>Praesent in neque congue sapien lobortis faucibus id eget erat. <br>Pellentesque maximus rutrum felis. Interdum et malesuada fames ac</p>
                        <a class="button btn btn-light btn-radius btn-brd" href="{{url('order')}}" style="padding:7px; margin:10px auto;font-size: 15px">GET AQUOTE</a>
                    </div>
                </div>
                <!-- end service -->
            </div><!-- end row -->

            <!--
                        <hr class="hr1">

                        <div class="text-center">
                            <a data-scroll href="#portfolio" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
                        </div>
            -->
        </div><!-- end container -->
    </div><!-- end section -->


    <!--////////////////////////////////////////////-->
    <div id="features" class="section wb" style="display:none">
        <div class="container">
            <div class="section-title text-center">
                <h3>Web Design Services</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
            </div><!-- end title -->

            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">

                            <img src="uploads/features_01.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Outstanding Landing Pages</h3>
                        <div class="row text-center">
                            <div class="col-md-4 col-sm-4 col-xs-12">test
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">test
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">test
                            </div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->


{{--                ////////////////////////////////////////--}}

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">

                            <img src="uploads/features_02.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Beautiful SVG Font Icons</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. </p>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">

                            <img src="uploads/features_03.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Build a Site In Few Minutes</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla.</p>
                    </div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!--////////////////////////////////////////////-->

    <hr class="hr1" style="margin: 50px 0;border: 1px solid #2121210f">

    <div id="portfolio" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>{{trans('front.portfolio')}}</h3>

            </div><!-- end title -->
        </div><!-- end container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="portfolio-filter text-center">
                        <ul>
                            <li><a class="btn btn-dark btn-radius btn-brd active" href="#" data-filter="*"><span class="oi hidden-xs" data-glyph="grid-three-up"></span> All</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" data-toggle="tooltip" data-placement="top" title="5" href="#" data-filter=".cat1">Design</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="12" data-filter=".cat2">Mockup</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="21" data-filter=".cat3">Logos</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="11" data-filter=".cat4">HTML</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <hr class="invis">

            <div id="da-thumbs" class="da-thumbs portfolio">
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/portfolio_01.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_01.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Seahorse by Trevor <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/portfolio_02.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_02.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Tradested Mockop <small>Graphic Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/portfolio_03.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_03.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Photography Material <small>Photography</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat4">
                    <a href="uploads/portfolio_04.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_04.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Responsive Menu <small>UI Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat3">
                    <a href="uploads/portfolio_05.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_05.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>SnowMaker App <small>Application</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/portfolio_06.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_06.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>3D Mockups <small>Graphic Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/portfolio_07.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_07.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Best of Design <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat4">
                    <a href="uploads/portfolio_08.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_08.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Admin Dashboard <small>Admin Template</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat3">
                    <a href="uploads/portfolio_09.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_09.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Radio Mockup <small>Graphic Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/portfolio_10.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_10.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Danny Jeffers <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->





    <div id="clients" class="parallax section  wb parallax-off" >
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 60px">
                <h3>{{trans('front.our_clients')}}</h3>

            </div><!-- end title -->



            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/clients/01.jpeg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/clients/02.jpeg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/clients/03.jpg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/clients/04.jpeg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/clients/05.jpeg" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/clients/06.jpeg" alt="" class="img-repsonsive"></a>
                </div>

            </div><!-- end row -->



            <hr class="hr1" style="margin: 50px 0;border: 1px solid #2121210f">

            <div class="row logos text-center">
                <a href="{{url('/clients')}}" class="btn btn-light btn-radius btn-brd grd1">{{trans('front.learn_more')}}</a>


            </div>


        </div><!-- end container -->
    </div><!-- end section -->



@endsection