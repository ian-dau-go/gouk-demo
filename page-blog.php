<?php
get_header('', ["active" => "blog", "title" => 'Blog']);

get_template_part('template-parts/blog/golden-owl-blog');
get_template_part('template-parts/blog/category');

if (have_posts()) {
    get_template_part('template-parts/blog/table');
}
else {
    echo 'Sorry, no posts were found.';
}

get_footer();
