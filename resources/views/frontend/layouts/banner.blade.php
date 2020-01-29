<!-- banner -->
@if( $bannerinfo == true )
<div class="banner">
@else
<div class="banner1">
@endif
	<div class="container">
		<div class="w3_agileits_banner_main_grid">
			<div class="w3_agile_logo">
				<h1><a href="{{ route('home') }}"><span>台</span>南農場<i>Tainan Farm</i></a></h1>
			</div>
			<div class="agile_social_icons_banner">
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="agileits_w3layouts_menu">
				<div class="shy-menu">
					<a class="shy-menu-hamburger">
						<span class="layer top"></span>
						<span class="layer mid"></span>
						<span class="layer btm"></span>
					</a>
					<div class="shy-menu-panel">
						<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
							<ul class="w3layouts_menu__list">
								<li class="@yield('menu_home')"><a href="{{ route('home') }}">Home</a></li>
{{--
								<li class="@yield('menu_about')"><a href="{{ route('about') }}">About Us</a></li> 
								<li class="@yield('menu_services')"><a href="{{ route('services') }}">Services</a></li>
								<li class="@yield('menu_gallery')"><a href="{{ route('gallery') }}">Gallery</a></li> 
								<li class="@yield('menu_contact')"><a href="{{ route('contact') }}">Contact Us</a></li>
--}}
							</ul>
						</nav>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
@if( $bannerinfo == true )
		<div class="w3_banner_info">
			<div class="w3_banner_info_grid">
				<h3 class="test">I'm Planting A Tree To Teach Me To Gather Strength From My Deepest Roots</h3>
{{--
				<p>Aenean congue vitae mauris sed tristique. Mauris quis nulla at sapien blandit 
					sollicitudin. Nunc tortor lorem, viverra sed diam ut, blandit efficitur leo.</p>
--}}
{{--
				<ul>
					<li><a href="{{ route('contact') }}" class="w3l_contact">Contact Us</a></li>
					<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">Read More</a></li>
				</ul>
--}}
			</div>
		</div>
		<div class="thim-click-to-bottom">
			<a href="#welcome_bottom" class="scroll">
				<i class="fa  fa-chevron-down"></i>
			</a>
		</div>
@endif
	</div>
</div>
<!-- banner -->
<!-- menu -->
<script>
	$(function() {
		initDropDowns($("div.shy-menu"));
	});
	function initDropDowns(allMenus) {
		allMenus.children(".shy-menu-hamburger").on("click", function() {
			var thisTrigger = jQuery(this),
				thisMenu = thisTrigger.parent(),
				thisPanel = thisTrigger.next();
			if (thisMenu.hasClass("is-open")) {
				thisMenu.removeClass("is-open");
			} else {			
				allMenus.removeClass("is-open");	
				thisMenu.addClass("is-open");
				thisPanel.on("click", function(e) {
					e.stopPropagation();
				});
			}
			return false;
		});
	}
</script>
<!-- //menu -->
@if( $bannerinfo == true )
<!-- text-effect -->
<script type="text/javascript" src="{{ asset('js/jquery.transit.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery.textFx.js') }}"></script> 
<script type="text/javascript">
	$(document).ready(function() {
		$('.test').textFx({
			type: 'fadeIn',
			iChar: 100,
			iAnim: 1000
		});
	});
</script>
<!-- //text-effect -->
@endif
