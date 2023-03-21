<?php 

    get_header();

    while(have_posts()) {
        the_post(); ?>
        <section class="section-1" style="background-image: url(<?php echo get_theme_file_uri('images/section-one-background.png') ?>; ">
            <div class="sec-1-left-side">
                <div class="sec-1-text-block">
                <h1 class="sec-1-title"><?php the_field('section_1_title'); ?></h1>
                <h3 class="sec-1-subtitle"><?php the_field('section_1_text'); ?></h3>
                </div>
            </div>
            <div class="sec-1-right-side">
                <img class="cyprus-people-mobile" class="cyprus-people-img" src="<?php echo get_theme_file_uri('/images/sec-1-mobile-cypruspeople.png'); ?>" alt="cypruspeople"></img>
            </div>
   
</div>
</div>
        </section>
        <section class="section-2">
            <div class="sec-2-left-side">
                <img class="cyprus-circle" src="<?php echo get_theme_file_uri('/images/Cyrpus-circle.png'); ?>" alt="cyprus"></img>
            </div>
            <div class="sec-2-right-side">
                <div class="form" style="background-image: url(<?php echo get_theme_file_uri('/images/form-bg.png') ?>; ">
                <h4 class="sec-2-title"><?php the_field('form_title'); ?></h4>
                <h5 class="sec-2-subtitle"><?php the_field('form_subtitle'); ?></h5>
            <?php echo do_shortcode('[cf7form cf7key="untitled"]'); ?>
            </div>
            </div>
        </section>
        <section class="section-3">
            <div class="sec-3-titles">
            
            <h3 class="sec-3-title"><?php the_field('sec_3_title'); ?></h3>
            <h5 class="sec-3-subtitle"><?php the_field('sec_3_subtitle'); ?></h5>
            </div>
            <i class="fa fa-arrow-right nxt-btn"></i>
            <i class="fa fa-arrow-left pre-btn"></i>
            <div class="services-cards">
                
            <?php 

                $jsonData = file_get_contents(__DIR__.'/services.json');
                $data = json_decode($jsonData);

                foreach($data as $service) {
                    ?>
                    <div class="service-card">
                        <?php
                    echo "<img src='".$service->img."' >";
                    echo "<h4>".$service->title;"</h4>";
                    echo "<h5>".$service->subtitle;"</h5>";
                    ?>
                    </div>
                <?php }
            ?>
            </div>

            
        </section>

        <section  class="section-4">
        <img class="sec-4-wave" src="<?php echo get_theme_file_uri('/images/wave-sec-4.png'); ?>" alt="wave"></img>

        <div class="sec-4-elements">
            <div class="sec-4-title"><?php the_field('sec_4_text'); ?></div>
            <div class="sec-4-images">
            <img class="sec-4-happy" src="<?php echo get_theme_file_uri('/images/happy.png'); ?>" alt="happy"></img>
            <img class="sec-4-jeep" src="<?php echo get_theme_file_uri('/images/Jeep.png'); ?>" alt="jeep"></img>
            </div>
        </div>
        <img class="sec-4-wave2" src="<?php echo get_theme_file_uri('/images/wave-sec-4.png'); ?>" alt="wave"></img>
        <img class="sec-4-wave3" src="<?php echo get_theme_file_uri('/images/wave-sec-4.png'); ?>" alt="wave"></img>
        </section>

        <section  class="section-5">
        <div class="sec-5-elements">
        <img class="floating-ball-1" src="<?php echo get_theme_file_uri('/images/waves-ball.png'); ?>" alt="floating-waves-ball" />
            <div class="sec-5-image">
            <img class="sec-5-party" src="<?php echo get_theme_file_uri('/images/party1.png'); ?>" alt="happy" />
            <div class="sec-5-title"><?php the_field('sec_5_text'); ?>
            <img class="floating-ball-2" src="<?php echo get_theme_file_uri('/images/waves-ball.png'); ?>" alt="floating-waves-ball" />
            </div>
            </div>
        </div>
        
        <img class="footer-wave" src="<?php echo get_theme_file_uri('/images/footer-wave.png'); ?>" alt="wave" />

        </section>

    <?php }

    get_footer();

?>