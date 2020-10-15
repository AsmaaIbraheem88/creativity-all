<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>CREATIVITY-AND- @yield('title')</title>

{{----}}
    
    
<meta name="author" content="crativity-and">
<meta name="description" content="">
<meta name="keywords" content="design,translation">
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="7 days" />
<meta name="rating" content="General" />
<meta name="ROBOTS" content="NOARCHIVE" />


{{----}}

<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

{{--@if(LaravelLocalization::getCurrentLocale() =='ar')--}}

{{-- <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">--}}
{{--@endif--}}



<!-- Site CSS -->
<link rel="stylesheet" href="{{asset('front/style.css')}}">

<!--<link rel="stylesheet" href="{{url('/')}}/front/main_{{LaravelLocalization::getCurrentLocale()}}.css">-->

<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('front/css/custom.css')}}">

<!-- Modernizer for Portfolio -->
<script src="{{asset('front/js/modernizer.js')}}"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- LOADER -->
<!--
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div>
-->
<!-- end loader -->
<!-- END LOADER -->

@include('front.layouts.header')

@yield('content')

@include('front.layouts.footer')

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
<!-- ALL JS FILES -->
<script src="{{asset('front/js/all.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('front/js/custom.js')}}"></script>
<script src="{{asset('front/js/portfolio.js')}}"></script>
<script src="{{asset('front/js/hoverdir.js')}}"></script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+201010988911", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->



</body>
</html>