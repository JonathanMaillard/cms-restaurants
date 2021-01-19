<?php get_header(); ?>

<!-- ARTICLES DE CUISINES -->
<div class="containerArticle">
    <?php if( have_posts() ): while( have_posts()) : the_post(); ?>
    <!-- " : " signifie s'il y a alors -->
    <div class="article">
    <!-- TITLE ARTICLE -->
        <h1 class="article__Title"><?php the_title() ?></h1>
    
        <?php endwhile; endif; ?>  
    </div>

    <!-- ACF CHAMPS -->
    <?php if( has_category( 'Recipes' ) ): ?>


        <div class="review">
            <!-- SUBTILE ARTICLE -->
            <h3 class="article__subtile"><?php the_field('subtitle'); ?></h3>

             <!-- PICTURE ARTICLE -->
            <img class="article__Picture" src="<?php echo get_field('image_article')['url']; ?>">

            <!-- LINK ARTICLE -->
            <div class="link">
                <a class="facebook" href="<?php the_field('facebook'); ?>">
                    <i class="fab fa-facebook-square">
                    </i>
                </a>

                <a class="twitter" href="<?php the_field('twitter'); ?>">
                    <i class="fab fa-twitter-square">
                    </i>
                </a>

                <a class="instagram" href="<?php the_field('instagram'); ?>">
                    <i class="fab fa-instagram-square">
                    </i>
                </a>

                <a class="email" href="<?php the_field('email'); ?>">
                    <i class="fas fa-envelope-square">
                    </i>
                </a>
            </div>
            <!-- INGREDIENT ARTICLE -->
            <div class="ingredient">
                <p class="ingredients__text"><?php echo get_field('ingredients'); ?></p>
            </div>

              <!-- INSTRUCTIONS ARTICLE -->
              <div class="instructions">
                <?php 
                $values = get_field('instructions');
                // var_dump($values);
                if($values){
                    echo '<ol>';

                    foreach($values as $value){
                        // var_dump($value);
                        echo '<li>' . $value['instruction'] . '</li>';
                        // var_dump($value)["picture"];
                        echo '<img src="'. $value["picture"]["url"] . '">';
                        
                        // rajouter des corchets avec ce qu'il faut mettre entre crochet
                    }
                    
                    echo '</ol>';
                }
                ?>
            </div>
            <?php endif; ?>
        </div>
</div>

<?php

          




