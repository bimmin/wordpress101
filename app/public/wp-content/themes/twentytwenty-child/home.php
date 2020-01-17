<?php

get_header();
echo 'blog index page';

$args = array (
    'post_type'     => 'post',
    'numberposts'   => 10,
    'orderby'       => 'date',
    'order'         => 'DESC'
);

$latest_posts = get_posts( $args );

echo '<div class="container-fluid">';
echo '<div class="row">';

// python: for latest_post in latest_posts
foreach ( $latest_posts as $latest_post ) {
    echo '<div class="col-md-6">';

    $categories = get_the_category( $latest_post->ID );
    echo $categories;
   
    foreach ( $categories as $catagory ) {
        echo $catagory->name;
    }

    echo '<h4>'.$lastest_post->post_title.'</h4>';
    echo '<p>'.$lastest_post->post_date.'</p>';
    echo '<a href="'.get_permalink( $lastest_post->ID ).'"> See Detail </a>';
    echo '<p>'.$lastest_post->post_content.'</p>';
    echo '<img  width="200px" src="'.get_the_post_thumbnail_url($lastest_post->ID).'">';
    echo '</div>';

}

echo '</div>';
echo '</div>';

get_footer();