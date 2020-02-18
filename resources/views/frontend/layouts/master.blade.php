<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<title>台南農場 Tainan Farm</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Facebook Opengraph -->
<meta property="og:url" content="https://www.tnfarm.tw/" />
<meta property="og:locale" content="zh_TW" />
<meta property="og:type" content="movie" />
<meta property="og:title" content="台南農場 Tainan Farm" />
<meta property="og:description" content="我們致力於推廣台南的農作物與特產品，希望能讓大家品嘗到來自南部的香甜美味。We are committed to promoting the crops and special products of Tainan, hoping that everyone can enjoy the sweet and delicious taste from the south."/>
<meta property="og:image" content="https://storage.cloud.google.com/tnfarm.appspot.com/opengraph/banner1.jpg" />
<meta property="og:image" content="https://storage.cloud.google.com/tnfarm.appspot.com/opengraph/banner2.jpg" />
<meta property="og:image" content="https://storage.cloud.google.com/tnfarm.appspot.com/opengraph/banner3.jpg" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="427" />
<!-- //Facebook Opengraph -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
@yield('headscripts')
<!-- font-awesome-icons -->
<link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
@include('frontend.layouts.banner', ['bannerinfo' => $bannerinfo ])
@include('frontend.layouts.pop-up')
@if( $bannerbottom == true)
@include('frontend.layouts.banner-bottom')
@endif
@yield('content')
@include('frontend.layouts.footer')
@yield('bodyscripts')
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('frontend/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //start-smoth-scrolling -->
<!-- here starts scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>
