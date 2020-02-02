<link href="{{ asset('frontend/css/mislider.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/mislider-custom.css') }}" rel="stylesheet" type="text/css" />
<!-- welcome -->
<div id="welcome" class="welcome">
	<div class="container">
		<h3 class="agileits_w3layouts_head">觀迎認識我們的農作物</br>Welcome to our <span>Plantation</span></h3>
		<div class="w3_agile_image">
			<img src="{{ asset('frontend/images/1.png') }}" alt=" " class="img-responsive" />
		</div>
		<p class="agile_para">有機栽培，天然營養。</br>Organic Cultivation, Natural and Nutritious.</p>
	</div>
	<div class="mis-stage w3_agileits_welcome_grids"> 
		<!-- The element to select and apply miSlider to - the class is optional -->
		<ol class="mis-slider">
			@foreach($welcomes as $welcome)
			<li class="mis-slide">
				<figure>
					<img src="{{ asset('uploads/welcome/' . $welcome->image) }}" alt=" " class="img-responsive" />
					<figcaption>{{ $welcome->title }}</figcaption>
				</figure>
			</li>
			@endforeach
		</ol>
	</div>
</div>
<!-- //welcome -->
<!-- mislider -->
<script src="{{ asset('frontend/js/mislider.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(function ($) {
		var slider = $('.mis-stage').miSlider({
			//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
			stageHeight: 380,
			//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
			slidesOnStage: false,
			//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
			slidePosition: 'center',
			//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
			slideStart: 'mid',
			//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
			slideScaling: 150,
			//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
			offsetV: -5,
			//  Center slide contents vertically - Boolean. Default: false
			centerV: true,
			//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
			navButtonsOpacity: 1,
		});
	});
</script>
<!-- //mislider -->
