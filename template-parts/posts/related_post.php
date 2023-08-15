<div class="carousel-item col-sm-6 col-md-6 col-lg-4 active">
    <div class="card">
        <img class="img-fluid mx-auto d-block" alt="100%x280" src="
        <?php
        echo 
            has_post_thumbnail($post->ID) ?
            get_the_post_thumbnail_url($post->ID) :
            get_template_directory_uri() . '/assets/images/Rectangle 4362 22.png' ?>">
        <div class="card-body">
            <div class="d-flex datetime ">
                <span class="d-inline-block date"><?php echo  DateTime::createFromFormat('Y-m-d H:i:s', $post->post_modified)->format('M j, Y'); ?></span>
                <span class="dot">
                    <img width="3px" src="<?php bloginfo('template_url'); ?>/assets/images/Ellipse 142.svg" alt="">
                </span>
                <span class="d-inline-block time">19 min read</span>
            </div>
            <h3 class="mt-2 title text-ellipsis">
                <?php echo $post->post_title ?>
            </h3>
            <p class="mt-2 description text-ellipsis">
                <?php echo $post->post_excerpt ?>
            </p>
        </div>
    </div>
</div>