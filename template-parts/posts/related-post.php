<div class="carousel-item col-sm-6 col-md-6 col-lg-4 active">
    <div class="card">
        <a href="<?php echo get_permalink($post->ID)?>">
            <img class="img-fluid mx-auto d-block" alt="100%x280" src="<?php 
                                    echo has_post_thumbnail($post->ID) ? 
                                        get_the_post_thumbnail_url($post->ID) :  
                                        get_template_directory_uri(). '/assets/images/blog/blog_default.jpeg' ?>">
        </a>
        <div class="card-body">
            <div class="d-flex datetime ">
                <span
                    class="d-inline-block date"><?php echo  DateTime::createFromFormat('Y-m-d H:i:s', $post->post_modified)->format('M j, Y'); ?></span>
                <span class="dot">
                    <img width="3px" src="<?php bloginfo('template_url'); ?>/assets/images/blog/ellipse_6x7.svg" alt="">
                </span>
                <span
                    class="d-inline-block time"><?php echo do_shortcode('[rt_reading_time post_id="' . $post->ID . '"]') ?>
                    min read</span>
            </div>
            <a href="<?php echo get_permalink($post->ID)?>" class="post_link">
                <h3 class="mt-2 title text-ellipsis">
                    <?php echo $post->post_title ?>
                </h3>
            </a>
            <p class="mt-2 description text-ellipsis">
                <?php echo $post->post_excerpt ?>
            </p>
        </div>
    </div>
</div>