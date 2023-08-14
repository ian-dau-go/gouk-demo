<section>
    <div class="row mx-auto">
        <div class="blog__list-of-posts __px-100px container-fluid row col-12">
            <?php 
            
            $first_post = get_posts(
                [
                'type' => 'post', 
                'offset' => 0,
                'limit' => 1,
                'order_by' => 'date',
                'order' => 'desc' 
                ]
            )[0];

            $top_3_posts = get_posts(
                [
                'type' => 'post', 
                'offset' => 1,
                'limit' => 3,
                'order_by' => 'date',
                'order' => 'desc' 
                ]
            );

            $posts = get_posts(
                ['type' => 'post', 
                'offset' => 3, 
                'order_by' => 'date',
                'order' => 'desc' 
                ]
            );

            get_template_part('template-parts/blog/first_post', null, ['post' => $first_post]);  

            foreach($top_3_posts  as $post)
            {
                get_template_part('template-parts/blog/second_post');  

            }

            foreach($posts as $post)
            {
                get_template_part('template-parts/blog/third_post');  

            }
            ?>

        </div>
        <div>

        </div>
    </div>
</section>