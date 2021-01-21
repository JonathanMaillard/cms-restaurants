<?php
    /*
    Template Name: Menu
    Template Post Type: page
    */
?>
<?php get_header(); ?>

<body style="background-color:#FFF;">

<div class="headerpicture">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-lg.jpg" class="black" alt="header">
</div>

<div class="block px-5 py-3">
<p class="block__maintitle">Let's find out
<span>The menu</span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="#">Order online </a></p>
</div>   
</div>

<div class="white-hatching"></div>

<section class="menu">
       <div class="pagetitle">
       <p>Welcome <span>The Menu</span></p>
       </div>

       <div class="foodType">
        <p class="menuCategory">Starters</p>   

        <div class="foodType__list">
        <ul class=dishes>
        <li><span>Bedfordshire clanger</span><span>9.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Bubble and squeak</span> <span>14.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Cauliflower cheese</span> <span>12.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Fish and chips</span> <span>9.25€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Cobbler</span> <span>10.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        </ul>
       </div>
       </div>


       <div class="foodType">
        <p class="menuCategory">Mains</p>   

        <div class="foodType__list">
        <ul class=dishes>
        <li><span>Bedfordshire clanger</span><span>9.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Bubble and squeak</span> <span>14.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Cauliflower cheese</span> <span>12.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Fish and chips</span> <span>9.25€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        <li><span>Cobbler</span> <span>10.95€</span></li>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat, odio sed laoreet scelerisque.</p>
        </ul>
       </div>
       </div>

</section>

<section class="lastupdated">
<div class="pagetitle">
       <p>Last updated <span>Recipes blog</span></p>
       </div>

       <div class="container p-5" style="width:75%;">
  <div class="row g-0">
    <div class="col"><div class="card border-0 entry" style="width:19rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="...">
  <div class="card-body m-2">
  <p class="entry__time"><i class="far fa-clock"></i> 10 FEBRUARY 2020</p>
  <p class="h5">Fluffy japanese pancakes</p>
  <p class="entry__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
  <div class="horizontal_dotted_line"><span class="dot"></span> Read more</div>
  </div>
</div></div>
    <div class="col">
    <div class="card border-0 entry" style="width:19rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="...">
  <div class="card-body m-2">
  <p class="entry__time"><i class="far fa-clock"></i> 10 FEBRUARY 2020</p>
  <p class="h5">Fluffy japanese pancakes</p>
  <p class="entry__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
  <div class="horizontal_dotted_line"><span class="dot"></span> Read more</div>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card border-0 entry" style="width:19rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="...">
  <div class="card-body m-2">
  <p class="entry__time"><i class="far fa-clock"></i> 10 FEBRUARY 2020</p>
  <p class="h5">Fluffy japanese pancakes</p>
  <p class="entry__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
  <div class="horizontal_dotted_line"><span class="dot"></span> Read more</div>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card border-0 entry" style="width:19rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="...">
  <div class="card-body m-2">
  <p class="entry__time"><i class="far fa-clock"></i> 10 FEBRUARY 2020</p>
  <p class="h5">Fluffy japanese pancakes</p>
  <p class="entry__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
  <div class="horizontal_dotted_line"><span class="dot"></span> Read more</div>
  </div>
</div>
    </div>
  </div>
</div>



<?php get_footer(); ?>