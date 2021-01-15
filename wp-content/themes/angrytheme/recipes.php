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

<section class="story wrapper">

    <div class="story__text">
        <h3>Discover<h3>
        <h2>OUR STORY</h2>
        <h4>ULTIMATE DINING EXPERIENCE LIKE NO OTHER</h4>

        <p>One of the notable character traits of a successful small restaurant owner is the ablity to easily solve problems. Problem-solving is a skill and most of the time comes with being open-minded.<p>
        <p>Succesful entrepreneurs are open-minded people and as such good optimists, critical thinkers and prolem solvers. As a small restaurant owner, you need to be able to proffer quick solutions to any problem that may arise in the course of your business<p>
        
        <h4>OUR FOUNDER</h4>
        <div class="signature">The Chef</div>

    </div>

</section>

<section class="restaurants">
    <div class="wrapper">

        <div class="restaurants__head">
            <h3 class="text-center">Discover our franchise</h3>
            <h2 class="text-center">OUR RESTAURANTS</h2>
        </div>
        
        <div class="restaurant restaurant-right">

  
            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4>Our original restaurant</h4>
                <h3>The Chef's cafeteria</h3>
                <p>The chef's cefeteria's 50 seat room, "The Meazzanine Room" features a temperature-controlled wine cellar, displays of more wine and a private atmosphere. A semi-private room, "Barbaresco", is available for meeting, birhtdays and other occasions.</p>
                <a href="#">More infos</a>
            </div>

        </div>

        <div class="restaurant restaurant-left">
            
     
            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4>Our first restaurant in Brussels</h4>
                <h3>The BeCentral resto</h3>
                <p>Somewhere over the rainbow<br>Way up high<br>And the dreams that you dream of<br>Once in a lullaby</p>
                <a href="#">More infos</a>
            </div>

        </div>

        <div class="restaurant restaurant-right">


            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4>Outssiplou, the place to be</h4>
                <h3>The Honkytonk</h3>
                <p>I feel your presence amongst us<br>You cannot hide in the darkness<br>Can you hear the rumble?<br>Can you hear the rumble that's calling?</p>
                <a href="#">More infos</a>
            </div>

        </div>

    </div>
</section>

<section class="food container-fluid">
    <div class="wrapper">
        <h3 class="text-center">LET'S DISCOVER FOOD</h3>
        <h2 class="text-center">DISCOVER OUR MENU</h2>
    </div>

    <div class="food__text text-center d-flex flex-column align-items-center">
        <p>For those with pure food indulgence in mind, come next door and state your desires with our ever changing internationally and seasonally inspired small plates. We love food, lots of different food, just like you.</p>
        <a href="#">View the full Menu</a>
    </div>
</section>



<?php get_footer(); ?>
