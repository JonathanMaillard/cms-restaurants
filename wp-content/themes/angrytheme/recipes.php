<?php
    /*
    Template Name: Recipes
    Template Post Type: page
    */
?>
<?php get_header(); ?>
<body style="background-color:#F5F5F5;">

<div class="headerpicture">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg" alt="header" class="black">
</div>

<div class="block px-5 py-3">
<p class="block__maintitle">The Chef's selection
<span>Recipes blog</span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="#"> check our menu </a></p>
</div>   
</div>

<div class="grey-hatching"></div>



<section class="articles">
    <div class="articles__wrapper">

    <div class="groups mb-5"> 
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> original dev's restaurant</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> local food</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> spicy</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> latino</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> italian</p>
    </div>


    <?php if( have_posts() ): ?>
    <div class="entries">
    <div class="row">
      <?php while( have_posts()) : the_post(); ?>
    <div class="col-sm entries__content">
    <p class="entries__time"><i class="far fa-clock"></i> 10 MARCH 2020</p>
    <p class="entries__tag"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> local food</p>
    <h4>The Salade Liégoise</h4>
    <p class="entries__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nunc sed dolor dictum, vitae lacinia odio volutpat. </p>
    <a href="#">Read more</a></div>
   
    <div class="col-sm">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salad.png" class="entries__img">
    </div>

    </div>
    </div>

    <div class="entries image-on-the-right">
    <div class="row">

    <div class="col-sm">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chicken-wings.jpg" class="entries__img">
    </div>

    <div class="col-sm entries__content">
    <p class="entries__time"><i class="far fa-clock"></i> 10 FEBRUARY 2020</p>
    <p class="entries__tag"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> spicy</p>
    <h4>Chicken wings from hell</h4>
    <p class="entries__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nunc sed dolor dictum, vitae lacinia odio volutpat. .</p>
    <a href="#">Read more</a></div>
    
    </div>
    </div>

    <div class="entries">
    <div class="row">

    <div class="col-sm entries__content">
    <p class="entries__time"><i class="far fa-clock"></i> 8 JANUARY 2020</p>
    <p class="entries__tag"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> original dev's restaurant</p>
    <h4>Midnight sandwich</h4>
    <p class="entries__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nunc sed dolor dictum, vitae lacinia odio volutpat. .</p>
    <a href="#">Read more</a></div>
   
    <div class="col-sm">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/midnight-sandwich.jpg" class="entries__img">
    </div>

    </div>
    </div>


    </div>
</section>



<?php get_template_part('parts/food') ?>






<?php get_footer(); ?>
