{{-- @include('layouts.frontend.partials.style')

        <div class="main-content">

@yield('content')

@include('layouts.frontend.partials.footer') --}}
        <!-- end main content-->

    {{-- </div> --}}
    <!-- END layout-wrapper -->


{{-- @include('layouts.frontend.partials.script') --}}


  {{-- <!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Vikan - Organic Food Store HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('frontend') }}/app/dist/font-awesome.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/app/dist/app.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/app/dist/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend') }}/assets/images/logo/Favicon.png">

</head>

<body class="body header-fixed"> --}}

@include('layouts.frontend.partials.style')

    <!-- preloade -->
    <div class="preload preload-container">
        <div id="loaders">
            <div id="shadow"></div>
            <div id="box"></div>
          </div>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">

@include('layouts.frontend.partials.topnav')
@include('layouts.frontend.partials.header')


@yield('content')

@include('layouts.frontend.partials.footer')

            <div class="widget-social-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h5 class="title-bottom fw-4"> Copyright © 2022 <a href="https://themeforest.net/user/themesflat/portfolio" class="text-color-3">Themesflat</a>. All Rights Reserved. </h5>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="icon-bottom text-color-1">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Bottom -->
        </div>
        <!-- /#page -->

    </div>
    <!-- /#wrapper -->

    <div class="img-svg">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
              <filter id="goo">
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                <feColorMatrix in="blur" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
              </filter>
            </defs>
        </svg>
    </div>

    <!-- <a id="scroll-top" class="button-go"></a> -->


    @include('layouts.frontend.partials.script')

    <!-- Javascript -->
{{--
    <script src="{{ asset('frontend') }}/app/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/app/js/jquery.easing.js"></script>
    <script src="{{ asset('frontend') }}/app/js/countto.js"></script>
    <script src="{{ asset('frontend') }}/app/js/count-down.js"></script>
    <script src="{{ asset('frontend') }}/app/js/countday.js"></script>
    <script src="{{ asset('frontend') }}/app/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/app/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/app/js/swiper.js"></script>
    <script src="{{ asset('frontend') }}/app/js/jquery.fancybox.js"></script>
    <script src="{{ asset('frontend') }}/app/js/jquery-validate.js"></script>

    <script src="{{ asset('frontend') }}/app/js/plugin.js"></script>
    <script src="{{ asset('frontend') }}/app/js/shortcodes.js"></script>
    <script src="{{ asset('frontend') }}/app/js/main.js"></script>

</body>

</html> --}}

