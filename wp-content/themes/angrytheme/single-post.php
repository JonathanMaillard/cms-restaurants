<?php get_header(); ?>

    <?php if( have_posts() ): while( have_posts()) : the_post(); ?>
        <!-- " : " signifie s'il y a alors -->
    <div class="article">
            <h1 class="article__title"><?php the_title() ?></h1>
            <img class="article__picture" src="<?php the_post_thumbnail_url() ?>" alt="" style= "width:100%; height:auto;" >
            <p class="article__text"><?php the_content() ?></p>
        
        <?php endwhile; endif; ?>  
    </div>
<?php get_footer(); ?>