<a href="<?php echo get_permalink($post->ID)?>"
    class="Frame94955__item py-md-3 py-lg-3 grid-item col-12 col-md-6 post_link">
    <div class="card">
        <div class="Frame94955__item--image col-12">
            <img height="299px" width="100%" src="<?php 
                                    echo has_post_thumbnail($post->ID) ? 
                                        get_the_post_thumbnail_url($post->ID) :  
                                        get_template_directory_uri(). '/assets/images/Rectangle 4362 22.png' ?>"
                alt="">
        </div>
        <div class="Frame94955__item--content col-12">
            <div class="d-flex datetime ">
                <span
                    class="d-inline-block date"><?php echo  DateTime::createFromFormat('Y-m-d H:i:s', $post->post_modified)->format('M j, Y');?></span>
                <span class="dot">
                    <img width="3px" src="<?php bloginfo('template_url'); ?>/assets/images/Ellipse 142.svg" alt="">
                </span>
                <span class="d-inline-block time">
                    <?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'"]')?> min read</span>
            </div>
            <h3 class="mt-2 title text-ellipsis">
                <?php echo $post->post_title ?>
            </h3>
            <p class="mt-2 description text-ellipsis">
                <?php echo $post->post_excerpt?>
            </p>
        </div>
    </div>
</a>