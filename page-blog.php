<?php
get_header('', ['slug' => 'blog',"active" => "blog", "title" => 'Blog - Golden Owl']);

get_template_part('template-parts/blog/golden-owl-blog');
get_template_part('template-parts/blog/category');

if (have_posts()) {
    get_template_part('template-parts/blog/table');
}
else {
    echo 'Sorry, no posts were found.';
}
get_template_part('template-parts/blog/subcrible-form');


get_footer();