<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="left-top">
                    <div class="email-box">
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> youremail@gmail.com</a>
                    </div>
                    <div class="phone-box">
                        <a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 890</a>
                    </div>
                    <div style="display: inline-block;margin-left: 20px;">

                        <ul>
                            <li class="dropdown dropdown-extended dropdown-notification" id="lang_list">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" style="color: white">
                                    <i class="fa fa-globe"></i> {{trans('front.languages')}}
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $key=>$value)
                                        <li>
                                            <a href="{{LaravelLocalization::getLocalizedUrl($key)}}">{{ $value['native'] }}   </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-top">
                    <div class="social-box">

                        <ul>

                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header header_style_01  ">
    <nav class="megamenu navbar navbar-default  ">
        <div class="container-fluid">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class=" navbar-brand" href="index.html"><img src="images/logos/004.png" alt="image" style="width:120px;height:60px"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse  ">
                <ul class="nav navbar-nav navbar-right ">
                    <li><a class="active" href="{{url('/')}}">{{trans('front.home')}}</a></li>
                    <li><a  href="{{url('/')}}/#about" data-scroll="about">{{trans('front.about')}}</a></li>
                    <li><a href="{{url('/')}}/#services" data-scroll="services">{{trans('front.services')}}</a></li>
                    <li><a href="{{url('/')}}/#portfolio" data-scroll="portfolio">{{trans('front.portfolio')}}</a></li>
                    <li><a href="{{url('/clients')}}">{{trans('front.clients')}}</a></li>
                    <li><a href="{{url('/contact')}}">{{trans('front.contact')}}</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
