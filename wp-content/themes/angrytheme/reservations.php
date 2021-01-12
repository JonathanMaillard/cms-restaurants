<?php
    /*
    Template Name: Reservations
    Template Post Type: page
    */
?>

<?php get_header(); ?>
<!--  TITLE   -->

<h4 class="originalRest__title4">Welcome in Liège</h4>
<h3 class="originalRest__title3">PRESENTATION</h3>

<!--  PART ONE CARD : ORIGINAL RESTAURANT   -->
<div class="originalRest">

    <div class="originalRest__One">
        <img class="originalRest__picture" src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg" alt="restaurant" />
        <h4 class="originalRest__title4">Our original restaurant</h4>
        <h3 class="originalRest__title3">The chef's cafeteria</h3>
        <p class="originalRest__para">
        Epic cheeseburgers come in all kinds of manifestations, 
        but we want them in and around our mouth no matter what. 
        Slide those smashed patties with the gently caramelized meat fat between a toasted brioche bun and pass it over. 
        You fall in love with the cheeseburger itself but the journey ain’t half bad either. 
        </p>
    </div>

    <div class="originalRest__Two">
        <img class="originalRest__picture" src="<?php echo get_template_directory_uri(); ?>/assets/images/salad.png" alt="food" />
        <h4 class="originalRest__title4">Our original restaurant</h4>
        <h3 class="originalRest__title3">The chef's cafeteria</h3>
        <p class="originalRest__para">
        Sometimes we lose sight of what really matters in life. 
        There’s something to be said for a gourmet brie and truffle burger paired with parmesan frites, 
        but don’t let that make you forget about the ol’ faithful with American cheddar and a squishy bun. 
        Lettuce remind you that cheeseburgers come in all forms - bun intended.
        Pop quiz: what’s the greatest thing to happen to your mind, body, and soul in recent history? A cheeseburger, obviously. 
        </p>
    </div>

</div>

<!--  LOCATION MAP   -->
<div class="locationMap">
    <h4 class="originalRest__title4">Find Us</h4>
    </br>
    <h3 class="originalRest__title3">Location</h3>
    <iframe width="100%" height="600px class="openstreetmap" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/carte-sans-nom_547091?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
    <!-- " -->
</div>

<!--  RESERVE TABLE   -->
<div class="reserveTable">
    <h4 class="reserveTable__title4">Submit Information to Place Order</h4>
    <h3 class="reserveTable__title3">RESERVE A TABLE</h3>
    <img class="reserveTable__picture" src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="fish" />
</div>

<?php echo do_shortcode('[formidable id="4"]');?>

<!--  DISCOVER OUR MENU with Jonathan   -->

<!--  Latest updated RECIPES BLOG with Jonathan   -->





<?php get_footer(); ?>