<?php
get_header("", ['active' => 'blog', 'title' => get_post(get_the_ID())->post_title]);

get_template_part('template-parts/posts/content');    

get_footer();