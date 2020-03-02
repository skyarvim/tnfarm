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
					@auth
	                <li><a href="{{ route('user.index') }}" class="list_user"><i class="fa fa-user @yield('list_user')" aria-hidden="true"></i></a></li>
					<li><a href="#" class="list_store @yield('list_store')"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
					<li><a href="#" class="list_cart @yield('list_cart')"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					<li><a href="{{ route('logout') }}" class="list_logout"
						onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						<i class="fa fa-sign-out" aria-hidden="true"></i></a>
					</li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					@else
	                <li><a href="{{ route('login') }}" class="list_logout"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
					@endauth
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
								<li class="@yield('menu_about')"><a href="{{ route('about') }}">About</a></li>
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
				<h3 class="slogon-tw">我們致力於推廣台南的農作物與特產品，希望能讓大家品嘗到來自南部的香甜美味。</h3>
				<h3 class="slogon-en">We are committed to promoting the crops and special products of Tainan, hoping that everyone can enjoy the sweet and delicious taste from the south.</h3>
				</h3>
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
			<a href="#welcome" class="scroll">
				<i class="fa fa-chevron-down"></i>
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
<script type="text/javascript" src="{{ asset('frontend/js/jquery.transit.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.textFx.js') }}"></script> 
<script type="text/javascript">
	$(document).ready(function() {
		$('.slogon-tw').textFx({
			type: 'fadeIn',
			iChar: 100,
			iAnim: 2000
		});
		$('.slogon-en').textFx({
			type: 'fadeIn',
			iChar: 25,
			iAnim: 2000
		});
	});
</script>
<!-- //text-effect -->
@endif
