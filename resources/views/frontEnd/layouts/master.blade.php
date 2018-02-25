<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quickly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('public/frontEnd/css/bootstrap.css')}} " rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('public/frontEnd/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('public/frontEnd/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontEnd/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for portfolio -->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontEnd/css/style5.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('public/frontEnd/css/common.css')}}" />
<!-- //for portfolio -->
</head>
	
<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
<!-- header -->
@include('frontEnd.layouts.inc.header')
<!-- //header -->
<!-- header-bottom -->
	@yield('mainContent')
<!-- //header-bottom -->
		</div>
	</div>
<!-- //banner-body -->
<!-- footer -->
@include('frontEnd.layouts.inc.footer')
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="{{asset('public/frontEnd/js/bootstrap.js')}}"> </script>
<!-- //for bootstrap working -->
</body>
</html>

