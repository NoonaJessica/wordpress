<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_title( '<h1>', '</h>');
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>


