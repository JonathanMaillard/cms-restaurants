<?php
    /*
    Template Name: Recipes
    Template Post Type: page
    */
?>
<?php get_header(); ?>
<body style="background-color:#F5F5F5;">

<div class="headerpicture">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg" alt="header" class="black" >
</div>

<div class="container block px-5 py-3" style="width:80%;">
<p class="block__maintitle">The Chef's selection
<span>Recipes blog</span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="#"> check our menu </a></p>
</div>   
</div>

<div class="headerhatching">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-grises.png" alt="linebreaker" class="hatching">
</div>

</body>

<?php get_footer(); ?>
