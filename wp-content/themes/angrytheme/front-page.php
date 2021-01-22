<?php get_header(); ?>

<body style="background-color:#F5F5F5;">

<div class="headerpicture">
<img src="<?php echo get_field('banner_image')['url']; ?>" class="black" alt="header">
</div>

<div class="block px-5 py-3">
<p class="block__maintitle"><?php echo get_field('banner_subtitle'); ?>
<span><?php echo get_field('banner_main_title'); ?></span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="<?php echo get_field('banner_link')['url']; ?>"><?php echo get_field('banner_link')['title']; ?></a></p>
</div>   
</div>

<div class="grey-hatching"></div>

<!-- FIN HEADER SANDRINE -->

<section class="qualities wrapper d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">

    <div class="qualities__quality text-center d-md-flex flex-row align-items-center justify-content-between flex-lg-column">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/quality-food.svg" />
        </div>

        <div class="qualities__text">
            <p><?php echo get_field('qualities_title_one') ?></p>
            <p class="qualities__subtext"><?php echo get_field('qualities_text_one') ?></p>
        </div>

    </div>

    <div class="qualities__quality text-center d-md-flex flex-row align-items-center justify-content-between flex-lg-column">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/fastest-delivery.svg" />
            
        </div>
        
        <div class="qualities__text">
            <p>FASTEST DELIVERY</p>
            <p class="qualities__subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae neque rem dolor ex a?</p>
        </div>

    </div>

    <div class="qualities__quality text-center d-md-flex flex-row align-items-center justify-content-between flex-lg-column">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/original-recipes.svg" />
        </div>
        
        <div class="qualities__text">
            <p>ORIGINAL RECIPES</p>
            <p class="qualities__subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae neque rem dolor ex a?</p>
        </div>

    </div>

</section>

<section class="story wrapper">

    <div class="story__image">
        <img src="<?php echo get_field('intro_chef_image')['url'] ?>">
    </div>

    <div class="story__text">
        <h3><?php echo get_field('intro_title') ?><h3>
        <h2><?php echo get_field('intro_main_title') ?></h2>
        <h4><?php echo get_field('intro_subtitle') ?></h4>

        <?php echo get_field('intro_text') ?>
        
        <h4><?php echo get_field('intro_signature_title') ?></h4>
        <div class="signature"><?php echo get_field('intro_signature') ?></div>

    </div>

</section>

<section class="restaurants">
    <div class="wrapper">

        <div class="restaurants__head">
            <h3 class="text-center">Discover our franchise</h3>
            <h2 class="text-center">OUR RESTAURANTS</h2>
        </div>
        
        <div class="restaurant restaurant-right d-flex flex-column">

            <div class="restaurant__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg">
            </div>
            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4>Our original restaurant</h4>
                <h3>The Chef's cafeteria</h3>
                <p>The chef's cefeteria's 50 seat room, "The Meazzanine Room" features a temperature-controlled wine cellar, displays of more wine and a private atmosphere. A semi-private room, "Barbaresco", is available for meeting, birhtdays and other occasions.</p>
                <a href="#">More infos</a>
            </div>

        </div>

        <div class="restaurant restaurant-left d-flex flex-column">
            
            <div class="restaurant__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto2.jpg">
            </div>
            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4>Our first restaurant in Brussels</h4>
                <h3>The BeCentral resto</h3>
                <p>Somewhere over the rainbow<br>Way up high<br>And the dreams that you dream of<br>Once in a lullaby</p>
                <a href="#">More infos</a>
            </div>

        </div>

        <div class="restaurant restaurant-right d-flex flex-column">

            <div class="restaurant__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto3.jpg">
            </div>
            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4>Outssiplou, the place to be</h4>
                <h3>The Honkytonk</h3>
                <p>I feel your presence amongst us<br>You cannot hide in the darkness<br>Can you hear the rumble?<br>Can you hear the rumble that's calling?</p>
                <a href="#">More infos</a>
            </div>

        </div>

    </div>
</section>

<?php get_template_part('parts/food') ?>

<section class="quote text-center d-lg-flex align-items-lg-center">
    <div class="quote__wrap d-flex flex-column align-items-center">

        <!-- Slider main container -->
        <div class="swiper-container ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php

                    // Check rows exists.
                    if( have_rows('testimony_testimonies') ):

                        // Loop through rows.
                        while( have_rows('testimony_testimonies') ) : the_row();

                            // Load sub field value.
                            $text = get_sub_field('text');
                            $author = get_sub_field('author');
                            
                ?>

                <div class="swiper-slide">
                    <div class="quote__text">
                        <p><i class="fas fa-quote-right"></i></p>
                        <p><?php echo $text; ?></p>
                    </div>

                    <div class="quote__author">
                        - <?php echo $author; ?>
                    </div>
                </div>

                <?php
                        // End loop.
                        endwhile;
                    endif;
                ?>    
                
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>
        
    </div>
    <div class="quote__image">
        <img src="<?php echo get_field('testimony_image')['url']; ?>">
    </div> 

</section>


<?php get_template_part('parts/latest') ?>


<?php get_footer(); ?>