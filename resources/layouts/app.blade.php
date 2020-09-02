<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.devsnews.com/template/tomatu/tomatu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2020 06:26:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>efarms </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/slick.css') }}">

        <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">

    </head>
    <body>
		<!-- preloader  -->
		<!-- <div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
				</div>
				<div class="loader">
					<div class="row">
						<div class="col-3 loader-section section-left">
							<div class="bg"></div>
						</div>
						<div class="col-3 loader-section section-left">
							<div class="bg"></div>
						</div>
						<div class="col-3 loader-section section-right">
							<div class="bg"></div>
						</div>
						<div class="col-3 loader-section section-right">
							<div class="bg"></div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
        <!-- preloader end -->

         @include('includes.header')
        @yield('content')
        @include('includes.footer')


        	<!-- JS here -->
            <script src="{{ asset('web/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('web/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('web/js/popper.min.js') }}"></script>
        <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('web/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('web/js/slick.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('web/js/ajax-form.js') }}"></script>
        <script src="{{ asset('web/js/wow.min.js') }}"></script>
        <script src="{{ asset('web/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('web/js/jquery.knob.js') }}"></script>
        <script src="{{ asset('web/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('web/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('web/js/plugins.js') }}"></script>
        <script src="{{ asset('web/js/main.js') }}"></script>
        @stack('js')
    </body>


</html>
