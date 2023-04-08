<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('user/assets/img/favicon.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
   </head>

   <body>
    <!-- Preloader Start -->
    
    <!-- Preloader Start -->
   
    
    @include("layouts.elements.header")
	<!--/slider-->
	
		
	@yield('content')
				
	
	@include("layouts.elements.footer")


    <script>
        $(document).ready(function(){
          $('sort').on('change',function(){
            var url = $(this).val();
            alert(url);
          });
        });
     </script>

    
  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('user/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('user/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('user/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('user/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('user/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('user/assets/js/price_rangs.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('user/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('user/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('user/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('user/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('user/assets/js/contact.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('user/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('user/assets/js/plugins.js')}}"></script>
        <script src="{{asset('user/assets/js/main.js')}}"></script>
        
    </body>
</html>