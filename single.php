<?php

get_header("", ['active' => 'blog', 'title' => get_post(get_the_ID())->post_title]);

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
    get_template_part('template-parts/posts/content');
endwhile;

get_footer();
