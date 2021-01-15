<?php
    /*
    Template Name: Reservations
    Template Post Type: page
    */
?>

<?php get_header(); ?>
<!--  TITLE   -->
<div class="containerReserv">
    <h4 class="welcome">Welcome in Liège</h4>
    <h3 class="presentation">PRESENTATION</h3>

    <!--  PART ONE CARD : ORIGINAL RESTAURANT   -->
    <div class="originalRest">

        <div class="originalRest__One">
        
            <div class="originalRest__box">
                <!-- PICTURE RESTAURANT -->
                <div class="originalRest__pictureOne" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg)" alt="restaurant">
                </div>
            </div>
            <div class="originalRest__box">
                <h4 class="originalRest__title4">Our original restaurant</h4>
                <h3 class="originalRest__title3">The chef's cafeteria</h3>
                <p class="originalRest__para">
                Epic cheeseburgers come in all kinds of manifestations, 
                but we want them in and around our mouth no matter what. 
                Slide those smashed patties with the gently caramelized meat fat between a toasted brioche bun and pass it over. 
                You fall in love with the cheeseburger itself but the journey ain’t half bad either. 
                </p>
            </div>
        </div>

        <div class="originalRest__Two">
        
            <div class="originalRest__box">
                <h4 class="originalRest__title4">Our original restaurant</h4>
                <h3 class="originalRest__title3">The chef's cafeteria</h3>
                <p class="originalRest__para">
                Sometimes we lose sight of what really matters in life. 
                There’s something to be said for a gourmet brie and truffle burger paired with parmesan frites, 
                ol’ faithful with American cheddar and a squishy bun. 
                Lettuce remind you that cheeseburgers come in all forms - bun intended.
                Pop quiz: what’s the greatest thing to happen to your mind, body, and soul in recent history? A cheeseburger, obviously. 
                </p>
            </div>
            <div class="originalRest__box">
                    <!-- PICTURE SALAD -->
                <div class="originalRest__pictureTwo" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/salad.png)" alt="salad">
                </div>
            </div>
        </div>
    </div>
</div>      
  
    <div class="containerBottom">
        <!--  LOCATION MAP   -->
        <div class="locationMap">
            <h4 class="locationMap__title4">Find Us</h4>
            <h3 class="locationMap__title3">Location</h3>
            <iframe width="100%" height="600px class="openstreetmap" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/carte-sans-nom_547091?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            <!-- " -->
        </div>

        <div class="flexBottom">
            <!--  RESERVE TABLE   -->
            <div class="reserveTable">
                <h4 class="text-center reserveTable__Submit">Submit Information to Place Order</h4>
                <h3 class="text-center reserveTable__Reserve">RESERVE A TABLE</h3>
                <!-- PICTURE FISH FOOD-->
                <div class="reserveTable__pictureDesk" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg)" alt="restaurant">
                </div>
                <img class="reserveTable__picturePhone" src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="fish" />
            </div>

            <div class="formSmartPhone">
            <?php echo do_shortcode('[formidable id="4"]');?>
            </div>

            <div class="formTabletteDesk">
            <?php echo do_shortcode('[formidable id="5"]');?>
            </div>
        </div>

<!--  DISCOVER OUR MENU with Jonathan   -->

<!--  Latest updated RECIPES BLOG with Jonathan   -->





<?php get_footer(); ?>