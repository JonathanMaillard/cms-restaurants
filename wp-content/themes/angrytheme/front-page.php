<?php get_header(); ?>

<section class="qualities container d-flex flex-column align-items-center">

    <div class="qualities__quality text-center">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/quality-food.svg" />
        <div>

        <div class="qualities__text">
            QUALITY FOODS
        </div>

    </div>

    <div class="qualities__quality text-center">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/fastest-delivery.svg" />
        <div>
        
        <div class="qualities__text">
            FASTEST DELIVERY
        </div>

    </div>

    <div class="qualities__quality text-center">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/original-recipes.svg" />
        <div>
        
        <div class="qualities__text">
            ORIGINAL RECIPES
        </div>

    </div>

</section>

<section class="story container">

    <div class="story__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/the-chef.jpg">
    </div>

    <div class="story__text">
        <h3>Discover<h3>
        <h2>OUR STORY</h2>
        <h4>ULTIMATE DINING EXPERIENCE LIKE NO OTHER</h4>

        <p>One of the notable character traits of a successful small restaurant owner is the ablity to easily solve problems. Problem-solving is a skill and most of the time comes with being open-minded.<p>
        <p>Succesful entrepreneurs are open-minded people and as such good optimists, critical thinkers and prolem solvers. As a small restaurant owner, you need to be able to proffer quick solutions to any problem that may arise in the course of your business<p>
        
        <h4>OUR FOUNDER</h4>
        <div>The Chef</div>

    </div>

</section>

<section class="restaurants container-fluid">
    <div class="container">

        <h3 class="text-center">Discover our franchise</h3>
        <h2 class="text-center">OUR RESTAURANTS</h2>
        
        <div class="restaurant restaurant-right">

            <div class="restaurant__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg">
            </div>
            <div class="restaurant__text text-center">
                <h4>Our original restaurant</h4>
                <h3>The Chef's cafeteria</h3>
                <p>The chef's cefeteria's 50 seat room, "The Meazzanine Room" features a temperature-controlled wine cellar, displays of more wine and a private atmosphere. A semi-private room, "Barbaresco", is available for meeting, birhtdays and other occasions.</p>
                <a href="#">More infos</a>
            </div>

        </div>

        <div class="restaurant restaurant-left">
            
            <div class="restaurant__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto2.jpg">
            </div>
            <div class="restaurant__text text-center">
                <h4>Our first restaurant in Brussels</h4>
                <h3>The BeCentral resto</h3>
                <p>Somewhere over the rainbow<br>Way up high<br>And the dreams that you dream of<br>Once in a lullaby</p>
                <a href="#">More infos</a>
            </div>

        </div>

        <div class="restaurant restaurant-right">

            <div class="restaurant__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto3.jpg">
            </div>
            <div class="restaurant__text text-center">
                <h4>Outssiplou, the place to be</h4>
                <h3>The Honkytonk</h3>
                <p>I feel your presence amongst us<br>You cannot hide in the darkness<br>Can you hear the rumble?<br>Can you hear the rumble that's calling?</p>
                <a href="#">More infos</a>
            </div>

        </div>

    </div>
</section>

<section class="food container-fluid">
    <div class="container">
        <h3 class="text-center">LET'S DISCOVER FOOD</h3>
        <h2 class="text-center">DISCOVER OUR MENU</h2>
    </div>

    <div class="food__pictures d-flex flex-column align-items-center">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dishes1.jpg"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dishes2.jpg"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dishes3.jpg"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dishes4.jpg"></div>
    </div>

    <div class="food__text">
        <p>For those with pure food indulgence in mind, come next door and state your desires with our ever changing internationally and seasonally inspired small plates. We love food, lots of different food, just like you.</p>
        <a href="#">View the full Menu</a>
    </div>
</section>


<?php get_footer(); ?>