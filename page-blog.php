<?php
get_header('', ["active" => "blog","title" => 'Blog']);

get_template_part('template-parts/blog/golden-owl-blog');    
get_template_part('template-parts/blog/category');    
get_template_part('template-parts/blog/table');    

get_footer();