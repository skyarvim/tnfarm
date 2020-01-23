<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3 class="agileits_w3layouts_head">Our <span>Featured</span> Services</h3>
        <div class="w3_agile_image">
            <img src="{{ asset('images/1.png') }}" alt=" " class="img-responsive">
        </div>
        <p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
        <div class="w3ls_news_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="agile_testimonials_grid">
                                <div class="col-md-4 agile_testimonials_grid_left">
                                    <img src="{{ asset('images/15.jpg') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-8 agile_testimonials_grid_right">
                                    <h5>Vivamus malesuada <span>pellentesque</span> nunc id <i>'condim'</i></h5>
                                    <div class="wthree_stars">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
                                        placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
                                        tristique enim.</p>
                                    <h6>:- Laura More <span>Customer</span></h6>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="agile_testimonials_grid">
                                <div class="col-md-4 agile_testimonials_grid_left">
                                    <img src="{{ asset('images/14.jpg') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-8 agile_testimonials_grid_right">
                                    <h5>Quisque eu aliquam <span>dignissim</span> ex a <i>'fringilla'</i></h5>
                                    <div class="wthree_stars">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
                                        placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
                                        tristique enim.</p>
                                    <h6>:- Henry Paul <span>Customer</span></h6>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="agile_testimonials_grid">
                                <div class="col-md-4 agile_testimonials_grid_left">
                                    <img src="{{ asset('images/16.jpg') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-8 agile_testimonials_grid_right">
                                    <h5>Vivamus malesuada <span>pellentesque</span> nunc id <i>'condim'</i></h5>
                                    <div class="wthree_stars">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
                                        placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
                                        tristique enim.</p>
                                    <h6>:- Andria Carl <span>Customer</span></h6>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //testimonials -->
<!-- flexSlider -->
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
