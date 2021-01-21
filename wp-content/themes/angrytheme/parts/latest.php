<?php
    /*
    Template Name: latest
    Template Post Type: page
    */
?>

<!-- SECTION LATEST UPDATE -->
<section class="lastupdated">
        <div class="pagetitle">
            <p>Last updated 
                <span>
                Recipes blog
                </span>
            </p>
        </div>

<?php
$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 4
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo ' <div class="d-flex flex-row card-body m-2">';
   
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<div class="container p-5" style="width:75%;">';
        echo '<div class="row g-0">';
        echo '<div class="col">';
        echo '<div class="card border-0 entry" style="width:19rem;">';
        echo '<div class="card" style="width: 20rem;">' . the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style'=> 'height:auto;']) . '</div>';
        echo '<p class="entry__time">' . '<i class="far fa-clock">' . '</i>' . the_time( get_option( 'date_format' ) ) . '</p>';
        echo '<p class="h5">' . get_the_title() . '</p>';
        echo '<p class="h5">' . get_field('subtitle') . '</p>';
        echo '<div class="horizontal_dotted_line">' . '<a href="' . get_permalink() . '">' . 'Read More' . '</a>' . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';

}
/* Restore original Post Data */
wp_reset_postdata();

?>

<!-- DOC https://wordpress.stackexchange.com/questions/220590/loop-code-is-displaying-pages-but-not-actual-posts -->
