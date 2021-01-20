<?php get_header(); ?>

<!-- ARTICLES DE CUISINES -->
<div class="containerArticle">
    <?php if( have_posts() ): while( have_posts()) : the_post(); ?>
    <!-- " : " signifie s'il y a alors -->
  
    <!-- TITLE ARTICLE -->
        <h1 class="article__Title"><?php the_title() ?></h1>
    
        <?php endwhile; endif; ?>  
 

    <!-- ACF CHAMPS -->
    <?php if( has_category( 'Recipes' ) ): ?>


        <div class="review">
            <!-- SUBTILE ARTICLE -->
            <h3 class="article__subtile"><?php the_field('subtitle'); ?></h3>
        </div>    

             <!-- PICTURE ARTICLE -->
            <img class="article__Picture" src="<?php echo get_field('image_article')['url']; ?>">

  

    <div class="flexDesktop">     
            <!-- LINK ARTICLE -->
            <div class="link">
                <a class="facebook" href="<?php the_field('facebook'); ?>">
                    <i class="fab fa-facebook-square iconarticle fb">
                    </i>
                </a>

                <a class="twitter" href="<?php the_field('twitter'); ?>">
                    <i class="fab fa-twitter-square iconarticle twit">
                    </i>
                </a>

                <a class="instagram" href="<?php the_field('instagram'); ?>">
                    <i class="fab fa-instagram-square iconarticle insta">
                    </i>
                </a>

                <a class="email" href="<?php the_field('email'); ?>">
                    <i class="fas fa-envelope-square iconarticle email">
                    </i>
                </a>
            </div>
            <!-- INGREDIENT ARTICLE -->
            <div class="ingredient">
                <h4 class="ingredient__title"><?php the_field('title_ingredient'); ?></h4>
                <p class="ingredient__text"><?php echo "<br/>". get_field("ingredients") . "<br/>"; ?></p>
            </div>
    </div>   

              <!-- INSTRUCTIONS ARTICLE -->
              <div class="instructions">
                <h4 class="instructions__title"><?php the_field('title_instructions'); ?></h4>
                <?php 
                $values = get_field('instructions');
                // var_dump($values);
                if($values){
                    echo '<ol class="instructions__number">';

                    foreach($values as $value){
                        // var_dump($value);
                        echo '<li class="instructions__liste">' . $value['instruction'] . '</li>';
                        // var_dump($value)["picture"];
                        echo '<img class="instructions__picture" src="'. $value["picture"]["url"] . '">';
                        // rajouter des corchets avec ce qu'il faut mettre entre crochet
                    }
                    
                    echo '</ol>';
                }
                ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- ICON SMARPHONE TABLETTE -->
        <div class="linkSmart">
                <a class="facebook" href="<?php the_field('facebook'); ?>">
                    <i class="fab fa-facebook-square iconarticle fb">
                    </i>
                </a>

                <a class="twitter" href="<?php the_field('twitter'); ?>">
                    <i class="fab fa-twitter-square iconarticle twit">
                    </i>
                </a>

                <a class="instagram" href="<?php the_field('instagram'); ?>">
                    <i class="fab fa-instagram-square iconarticle insta">
                    </i>
                </a>

                <a class="email" href="<?php the_field('email'); ?>">
                    <i class="fas fa-envelope-square iconarticle email">
                    </i>
                </a>
            </div>
</div>

<?php get_footer(); ?>

          




