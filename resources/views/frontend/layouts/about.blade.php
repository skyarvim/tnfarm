<!-- about -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head">Why <span>Choose</span> Us</h3>
        <div class="w3_agile_image">
            <img src="{{ asset('frontend/images/1.png') }}" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
        <div class="w3ls_news_grids"> 
            <div class="col-md-6 w3_agile_about_grid_left">
                <h3>Pellentesque a ligula nec dui ornare pulvinar in non sem condimentum erat</h3>
                <p><i>In eleifend nisl fermentum bibendum euismod. Pellentesque ac mi quis tortor 
                    consequat scelerisque.</i> Sed eros urna, rhoncus nec tortor quis, pretium vestibulum
                    purus. Nunc quis augue nibh. Proin non enim non nulla scelerisque scelerisque 
                    vitae non est. Quisque iaculis leo at lacus malesuada mattis.</p>
            </div>
            <div class="col-md-6 w3_agile_about_grid_right">
                <div class="skillbar" data-percent="78">
                    <span class="skillbar-title" style="background: #f1703a;">Seeds</span>
                    <p class="skillbar-bar" style="background: #f88c5e;"></p>
                    <span class="skill-bar-percent"></span>
                </div>
                <!-- End Skill Bar -->
                
                <div class="skillbar" data-percent="54">
                    <span class="skillbar-title" style="background: #2980b9;">Growth</span>
                    <p class="skillbar-bar" style="background: #3498db;"></p>
                    <span class="skill-bar-percent"></span>
                </div>
                <!-- End Skill Bar -->
                
                <div class="skillbar" data-percent="76">
                    <span class="skillbar-title" style="background: #a0d034;">Economy</span>
                    <p class="skillbar-bar" style="background: #b2ec2f;"></p>
                    <span class="skill-bar-percent"></span>
                </div>
                <!-- End Skill Bar -->
                
                <div class="skillbar" data-percent="80">
                    <span class="skillbar-title" style="background: #e7cc2c;">Planting</span>
                    <p class="skillbar-bar" style="background: #f5d410;"></p>
                    <span class="skill-bar-percent"></span>
                </div>
                <!-- End Skill Bar -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- skills -->
<script src="{{ asset('frontend/js/skill.bars.jquery.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.skillbar').skillBars({
            from: 0,
            speed: 4000, 
            interval: 100,
            decimals: 0,
        });
    });
</script>
<!-- //skills -->
