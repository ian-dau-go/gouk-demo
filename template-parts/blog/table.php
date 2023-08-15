<section>
    <div class="row mx-auto">
        <div class="blog__list-of-posts __px-100px container-fluid row col-12">
            <?php 

            $category_slug = get_query_var('category');
            $search = get_query_var('search');

            $posts = get_posts(
                ['type' => 'post', 
               
                'order_by' => 'date',
                'order' => 'desc',
                'category_name' => $category_slug,
                's' => $search
                ]
            );
            
            foreach($posts as $post)
            {
                get_template_part('template-parts/blog/article');  

            }
            ?>

        </div>
        <div>

        </div>
    </div>
</section>